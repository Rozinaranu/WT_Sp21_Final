<?php
   require_once "models/db_config.php";
	  function executename($name){
		$query = "select * from tutor_table where name='$name'";
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
			
			$subject="";
			$err_subject="";
			
			$bm="";
			$err_bm="";
			
			$day="";
			$err_day="";
			
			$salary="";
	        $err_salary="";
			
			
			$comment="";
			$err_comment="";
			$hasError=false;
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				   $name=$_POST["name"];
			      $email=$_POST["email"];
			       $adress= $_POST["adress"];
		           $subject=$_POST["subject"];
			        $bm=$_POST["bm"];
			       $day=$_POST["day"];
				   $salary=$_POST["salary"];
		          $comment=$_POST["comment"];
			
				 if(isset($_POST["Apply"])){
				 
			
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
					
					if(empty($_POST["subject"])){                                       
					$err_subject=" *Choose a subject";
					$hasError=true;
				        }
				
				    else{
					$subject=$_POST["subject"];
				     }
					 if(empty($_POST["bm"])){
					$err_bm="*select background medium you want to teach";
					$hasError=true;
				     }
				    else{
					
					$bm=$_POST["bm"];
				    }
						if(empty($_POST["day"])){                                       
					$err_day="*select one from below";
					$hasError=true;
				    }
				
				    else{
					$day=$_POST["day"];
				    }
					if(empty($_POST["salary"])){                                       
					$err_salary="*select salary range";
					$hasError=true;
				    }
				
				   else{
					$salary=$_POST["salary"];
				  }
				  if(empty($_POST["comment"])){                                       
					$err_comment="*Tell us about yourself";
					$hasError=true;
				   }
				
				  else{
					
					$comment=$_POST["comment"];
				     }
					 
					 if(!$hasError){
					
			    $query = "insert into`tutor_table`(`name`, `email`, `adress`,`subject`,`bm`,`day`,`salary`,`comment`) values('$name','$email','$adress','$subject','$bm','$day','$salary','$comment')";	
					//echo $query;

 			        $result = execute($query);
			
				
				}
			}
			
			}
			
	?>
					

			
					
				
					 
					 
				
