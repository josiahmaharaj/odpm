<?php
	include 'config/connection.php';
	
	function getQuestions($conn){
	
	$query = "SELECT * FROM survey_questions";
	
	$result = mysql_query($query);
	
	/*while($survey_questions = mysql_fetch_array($result)){
		echo "<p>" . $survey_questions['question_body'] . "</p>";
	}*/
	
	if ($result){
			while ($row = mysql_fetch_array($result, MYSQL_ASSOC)){
					$body = $row['question_body'];
					
					echo('
							<div class="container">
								<div class="jumbotron">
									<div class="container">
										<div class="textsection">
											<center>
												<h3 class="text-center"> ' .$body .':</h3>
												<form action="index.php" method="post">
													<div align="center">
														<input type="radio" name="ans" value="yes" /> Yes <br />
														<input type="radio" name="ans" value="no" checked="checked"/> No <br />
													</div>
													<hr />
													<input type="text" name="answer" class="form-control" placeholder="Answer" />
													<input type="button" value="Submit" name="submit" />
													<input type="hidden" name="questionid" value="questionid" />
													<input type="hidden" name="submitted" value="1" />
												</form>
												</center>
											</div>
										</div>
									</div>
								</div>							
					
					
					');
					
				}
		}
	}
?>