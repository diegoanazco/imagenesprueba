<?php
	
	function rapid_api($word,$respuesta){
		if($word != ""){
			
					if ($respuesta->result != "Wort $word nicht im Lexikon."){
				
						echo "<h2>Word: $word</h2>";
					
						// conjugated forms 
						echo "<h4>Conjugated Forms:</h4>";
						$conjugated_forms = $respuesta->conjugated_forms;
						foreach($conjugated_forms as $values) {
								foreach($values as $value) {
									if($value == "Infinitive" || $value == "Simple Past" || $value == "Past Participle")
										echo "<h5> $value </h5> ";
									else	
										echo "<h6> $value </h6>";
							}
						}
						
						// conjugated tables

						$conditional = $respuesta->conjugation_tables->conditional;
						// condicional presente
						echo "<h4>Conditional Present</h4>";
						$cpresent = $conditional[0]->forms;
						foreach($cpresent as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// condiconal presente progresivo

						echo "<h4>Conditional Present Progressive</h4>";
						$cpresent = $conditional[1]->forms;

						foreach($cpresent as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// condicional perfecto
						echo "<h4>Conditional Perfect</h4>";
						$cpresent = $conditional[2]->forms;

						foreach($cpresent as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// condicional perfecto progresivo
						echo "<h4>Conditional Perfect progressive</h4>";
						$cpresent = $conditional[3]->forms;

						foreach($cpresent as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// indicativo:

						$indicative = $respuesta->conjugation_tables->indicative;
						// presente simple
						$cindicative = $indicative[0]->forms;
						echo "<h4>  Simple Present</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// presente continuo
						$cindicative = $indicative[1]->forms;
						echo "<h4>Present continous</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// presente perfecto
						$cindicative = $indicative[2]->forms;
						echo "<h4>Present Perfect</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// presente perfecto progresivo
						$cindicative = $indicative[3]->forms;
						echo "<h4>Present Perfect Progressive</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Simple Past
						$cindicative = $indicative[4]->forms;
						echo "<h4>Simple Past</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Pasado progresivo
						$cindicative = $indicative[5]->forms;
						echo "<h4>Past Continous</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Pasado perfecto
						$cindicative = $indicative[6]->forms;
						echo "<h4>Past Perfect</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Pasado perfecto continuo
						$cindicative = $indicative[7]->forms;
						echo "<h4>Past Perfect Continous</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Futuro simple
						$cindicative = $indicative[8]->forms;
						echo "<h4>Simple Future</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Futuro continuo
						$cindicative = $indicative[9]->forms;
						echo "<h4>Future Continuos</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Futuro perfecto
						$cindicative = $indicative[10]->forms;
						echo "<h4>Future Perfect</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Futuro perfecto continuo
						$cindicative = $indicative[11]->forms;
						echo "<h4>Future Perfect Continous</h4>";

						foreach($cindicative as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// Pasivo

						$pasive = $respuesta->conjugation_tables->passive;
						// Presente simple pasivo
						$cpasive = $pasive[0]->forms;

						echo "<h4>Passive simple present</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Presente continuo pasivo
						$cpasive = $pasive[1]->forms;

						echo "<h4>Passive present continous</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// Presente perfecto pasivo
						$cpasive = $pasive[2]->forms;

						echo "<h4>Passive present perfect</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// Presente perfecto pasivo
						$cpasive = $pasive[3]->forms;

						echo "<h4>Passive present perfect continous</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// passive simple past
						$cpasive = $pasive[4]->forms;

						echo "<h4>Passive simple past</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// passive simple past
						$cpasive = $pasive[5]->forms;

						echo "<h4>Passive past progressive</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// passive simple past
						$cpasive = $pasive[6]->forms;

						echo "<h4>Passive past perfect</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// passive simple past
						$cpasive = $pasive[7]->forms;

						echo "<h4>Passive past perfect progressive</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// passive simple past
						$cpasive = $pasive[8]->forms;

						echo "<h4>Passive simple future</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}

						// passive future progressive
						$cpasive = $pasive[9]->forms;

						echo "<h4>Passive future progressive</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// passive future perfect
						$cpasive = $pasive[10]->forms;

						echo "<h4>Passive future perfect</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
						// passive future perfect progressive
						$cpasive = $pasive[11]->forms;

						echo "<h4>Passive future perfect progressive</h4>";

						foreach($cpasive as $values)
						{
							foreach($values as $value)
							{
								if($value == "I" || $value == "you" || $value == "he/she/it"|| $value == "we"|| $value == "they")
									echo "<h5> $value </h5> ";
								else	
									echo "<h6> $value </h6>";
							}
							//echo '<hr/>';
						}
					}
					else {
						echo "<h2>Please input a verb</h2>";
					}
					
				}
				else{
					echo "<h2>Word is requeried</h2>";
				}
	}

?>