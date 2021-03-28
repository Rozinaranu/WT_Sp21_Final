<?php
	session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	require_once "db_config.php";
	
	
?>

<html>
	<body>
	<span> Welcome to Dashboard </span>
	
	<a target="_blank" href="allstudents.php"> All Students </a>
	 <a target="_blank" href="addstudent.php"> Add Student </a>
	 <a target="_blank" href="editstudent.php"> Edit Student </a>

	
	</body>
</html>	


