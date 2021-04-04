<?php 
    require_once'model/db_config.php';
   $name="";
   $username="";
   $email="";
   $password="";
   
   $err_password="";
   $err_email="";
   
   $err_name="";
   $err_username="";
   $hasError=false;
  
   
   if($_SERVER["REQUEST_METHOD"] == "POST"){
	   if(empty($_POST["name"])){
		   $hasError=true;
		   $err_name= "<br> name required";
   }
   else{
	   $name=$_POST["name"];
   }
      if(empty($_POST["username"])){
		   $hasError=true;
		   $err_username= "<br> username required";
   }
   else{
	   $name=$_POST["username"];
   }
    if(empty($_POST["email"])){
		   $hasError=true;
		   $err_email= "<br> email required";
   }
   else{
	   $name=$_POST["email"];
   }
    if(empty($_POST["password"])){
		   $hasError=true;
		   $err_password= "<br> password  required";
   }
   else{
	   $name=$_POST["password"];
   }
   
   if(!$hasError){
	
	 insertUser($name,$username,$password,$email);

}
if (isset($_POST["btn_login"])){
	
	
	if (authenticateUser($_POST["username"],$_POST["password"])){
		header("Location: dashboard.php");
		
		
	}
	echo "invalid username or password";

}
   
   
   
   function insertUser($name,$password,$username,$email){
	
	$query="insert into users values(NULL,$name,$username,$password,$email)";
	execute($query);
}

function authenticateUser($username,$password){
	
	$query="select * from users  where username='$username' and password='$password'";
     $result=get($query);
      print_r($result);
     if (count($result)>0){
     return $result[0];
}
return false;
	
	
}
   }
   
   
	   

?>