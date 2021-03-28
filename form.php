<?php
$uname="";
$password="";
if($_SERVER(["REQUEST_METHOD"]=="POST"){
	$uname=$_POST ["uname"];
	$password=$_POST ["password"];
	
}
?>





<html>
    <body> 
	      <form action="" method="post">
		  <input type="text" name="uname" placeholder="username"> <br> 
		  <input type="password" name="password" placeholder="password"> <br>
		  <input type="submit" value="Register">
		  
		  </form> 
	</body>
</html> 