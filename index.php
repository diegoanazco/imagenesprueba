<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    h5 { color: #FF0000; }
  </style>
</head>
<body>

<?php
	$wordErr = "";
	$word  = "";

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["word"])) {
		$wordErr = "Word is required";
	  } else {
		$word = test_input($_POST["word"]);
		// check if name only contains letters and whitespace
		if (!preg_match("/^[a-zA-Z ]*$/",$word)) {
		  $wordErr = "Only letters and white space allowed";
		}
	  }
	}

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
?>

<div class="jumbotron text-center">
  <h1>Inglés API-CATION</h1>
  <p>¡Traduce la palabra que quieras y adquiere ejemplos!</p> 
  <form class= "w3-col" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
	  <div class="col-xs-4 col-xs-offset-4">
		<input type="text" name="word" value="<?php echo $word;?>" class="form-control"  placeholder="INGRESE UNA PALABRA">
	  </div>
	  <br></br>
	  <span class="error">* <?php echo $wordErr;?></span>
	  <input class="btn btn-primary" type="submit" name="submit" value="BUSCAR" > 	 
  </form>
</div>

<?php
	$url = 'https://linguatools-conjugations.p.rapidapi.com/conjugate/';
	$request_url = $url . '?verb=' . $word;

	$curl = curl_init($request_url);

	curl_setopt_array($curl, array(CURLOPT_CUSTOMREQUEST =>'GET'));
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl, CURLOPT_HTTPHEADER, [
	  'X-RapidAPI-Host: linguatools-conjugations.p.rapidapi.com',
	  'X-RapidAPI-Key: dd9b30ac44msh1963fe8a53d6448p1889d2jsnafe1d3641ad1',
	  'Content-Type: application/json'
	]);

	curl_setopt($curl, CURLOPT_TIMEOUT, 30);
	curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 10);
	curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
	$response = curl_exec($curl);
	$respuesta = json_decode($response);
	curl_close($curl);
?> 

 <div class="container">
  <div class="row">
    <div class="col-sm-4">
      <p>
		<?php 
			include "action_rapid_api.php";
			rapid_api($word,$respuesta);
		?>
	  </p>
    </div>
    <div class="col-sm-4">
      <h3>API 2</h3>
    </div>
    <div class="col-sm-4">
      <h3>API 3</h3>        
    </div>
  </div>
</div>



</body>
</html>