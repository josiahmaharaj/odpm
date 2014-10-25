<?php

	$dbhost = 'localhost';
	$dbuser = 'root';
	$dbpass = '';
	$db = 'odpm_survey';
	
	$conn = mysql_connect($dbhost, $dbuser, $dbpass);
	mysql_select_db($db);
	

?>