<?php
	include 'config/connection.php';
	include 'functions/getQues.php';
	/*
	$query = "SELECT * FROM survey_questions";
	
	$result = mysql_query($query);
	
	while($survey_questions = mysql_fetch_array($result)){
		echo "<p>" . $survey_questions['question_body'] . "</p>";
	}*/
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>ODPM-Survey</title>
<link rel="stylesheet" type="text/css" href="styles/default.css"/>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="styles/font-awesome.css"/>
<link rel="stylesheet" type="text/css" href="styles/bootstrap.css"/>
<link rel="stylesheet" type="text/css" href="styles/bootstrap-social.css"/>
</head>

<body>
<div class="wrapOverallt"> <!--WrapContent-->
    <div class="header">
    	<center><div class="head-placeholder">
            <img src="img/ODPM_LOGO.png" alt="ODPM_LOGO" height="104" width="104"/>
           <h2>Office of Disaster Preparedness and Managament</h2>
        </div></center>
    </div> <!--END header-->
    <div class="wrapContent"> <!--WrapContent-->
        <div class="content">
            <h2 class="text-center">C.O.R.E Phase 1</h2>
            
            <?php    getQuestions($conn)     ?>
            
            <!-- About Section -->
		<!--<div class="container">
			<div class="jumbotron">
				<div class="container">
					<div class="textsection">
						<center>
                            <h3 class="text-center">Question 1</h3>
                            <form action="index.php" method="post">
                            	<div align="center">
                                	<input type="radio" name="ans" value="yes" /> Yes <br />
                                	<input type="radio" name="ans" value="no" checked="checked"/> No <br />
                                </div>
                                <hr />
                                <input type="text" name="answer" size="30" />
                                <input type="button" value="Submit" name="submit" />
                                <input type="hidden" name="questionid" value="questionid" />
                                <input type="hidden" name="submitted" value="1" />
                            </form>
						</center>
					</div>
				</div>
			</div>
		</div>-->

        </div> <!--END content-->
    </div> <!--END WrapContent-->

    <div class="footer">
        <div class="footer-content">
            <h5>ODPM Surveying Application</h5>
            <h5>© 2014 ECNG</h5>
        </div>
    </div> <!--END footer-->

</div> <!--END WrapOverall-->

</body>
</html>