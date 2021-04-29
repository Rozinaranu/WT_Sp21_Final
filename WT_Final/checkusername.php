<?php
         require_once "controllers/Edittutorcontroller.php";
		   $name="ranu";
		  
			$name=$_GET["name"];
			//$email=$_GET["email"];
			//$adress=$_GET["adress"];
		    //$Extrainfo=$_GET["Extrainfo"];
		    $res= trim(checkusername($name));
             echo $res;
		  
?>