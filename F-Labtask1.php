<?php 
    if($_SERVER["REQUSET METHOD"]=="POST"){
		$username=$_POST["username"];
		$password=$_POST["password"];
		if($username  =="Rozina"&& $password=="1234"){
			setcookie("username",$username,time()+120);
			    header("Location: Dashboard.php");
		}
	}
	
	?>







<html> 
    <head> </head>
	  <body> 
	     <form> 
		   username: <input type="text" name="username"> <br>
		   password:<input type="password" name="password"> <br>
		   <input type="submit" name="submit" value="Login">
		   </form>
		   </body> 
 </html>