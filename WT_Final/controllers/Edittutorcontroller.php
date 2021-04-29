<?php
   require_once "models/db_config.php";
    function checkusername($name){
		$query = "select * from updatetutor where name='$name'";
		$result=get($query);
		if(count($result) > 0){
			return "false";
		}
		return "true";
	}

			$name="";
			$err_name="";
			
			$email="";
			$err_email="";
			
			$adress="";
			$err_adress="";
			
			$Extrainfo="";
			$err_Extrainfo="";
			$hasError=false;
			
			
			  if($_SERVER['REQUEST_METHOD']== "POST"){
		            $name=$_POST["name"];
			      $email=$_POST["email"];
			       $adress= $_POST["adress"];
			       $Extrainfo=$_POST["Extrainfo"];
			
	
				
				
				
				
				 if(isset($_POST["Submit"])){
			
					 if(empty($_POST["name"])){                                       
					$err_name="*write your name";
					$hasError=true;
				}
				
				else{
					$name=$_POST["name"];
				}
			 if(empty($_POST["email"])){                                       
					$err_email="*email need";
					$hasError=true;
				}
				
				else{
					$email=$_POST["email"];
				}
				
					if(empty($_POST["adress"])){
					$err_adress="*write your adress"; 
					$hasError=true;
					
				}
				else{
					$adress=$_POST["adress"];
				}
					if(empty($_POST["Extrainfo"])){
					$err_Extrainfo="*this Box is Empty";
						$hasError=true;
				}
				
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
					
				
				
				if(!$hasError){
					
						
						
	$query= "insert into `updatetutor`(name,email,adress,Extrainfo) values('$name','$email','$adress','$Extrainfo')";
	
		$result = execute($query);
	 }
	 }	
	 
	
			  
			  
			  }
			  
			  
	 
	 
	 	 ?>
	 		

	
	
				