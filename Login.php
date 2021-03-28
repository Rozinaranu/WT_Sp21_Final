<?php
	require_once "db_config.php";
	$uname="";
	$pass="";
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$uname=$_POST["uname"];
		$pass=$_POST["pass"];
		$query = "select * from admin where username='$uname' and password='$pass'";
		$result = get($query);
		if(count($result)>0){
			session_start();
			$_SESSION["loggedin"]=$uname;
			header("Location: dashboard1.php");
		}
		else{
			echo "invalid";
		}
		
	}

?>


<html>
	<head>
	</head>
	<body>
			<form action="" method="post">
				<table>
				
					<tr>
						<td><span>Username:</span> </td>
						<td><input type="text" name="uname"></td>
					</tr>
					<tr>
						<td><span>Password: </span></td>
						<td><input type="password" name="pass"></td>
					</tr>
					<tr>
						<td><input type="submit"  value="Login" name="login">
					</tr>
				</table>
			</form>
		
	</body>
</html>