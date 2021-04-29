<?php
        
		   require_once "controllers/Tutotcontroller.php";
		  
		  $name="ranu";
		$name=$_GET["name"];
		  $res= trim(executename($name));
	
		  echo $res;
		  
?>