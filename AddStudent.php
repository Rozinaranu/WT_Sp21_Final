<?php
	session_start();
	if(!isset($_SESSION["loggedin"])){
		header("Location: login.php");
	}
	require_once "db_config.php";
	$name="";
	$err_name="";
	
	$day="";
	$month="";
	$year="";
	$dob="";
	
	$credit="";
	$err_credit="";
	
	$cgpa="";
	$err_cgpa="";
	
	$dept_id="";
	$err_dept="";
	
	$hasError=false;
	
	if($_SERVER["REQUEST_METHOD"] == "POST"){
		$name=$_POST["name"];
		$day=$_POST["day"];
		$sls="/";
		$month=$_POST["month"];
		$year=$_POST["year"];
		$dob=$day.$sls.$month.$sls.$year;
		$credit=$_POST["credit"];
		$cgpa=$_POST["cgpa"];
		$dept_id=$_POST["dept_id"];
		
		
		if(empty($_POST["name"])){
			$err_name="*Name Required";
			$hasError = true;
		}
		else{
			$name=htmlspecialchars($_POST["name"]);
		}
		if(empty($_POST["credit"])){
			$err_credit="*Credit Required";
			$hasError = true;
		}
		else if(strlen($_POST["credit"])<1){
			$err_credit="*Credit should be 3 number";
			$hasError = true;
		}
		else{
			if(ctype_digit($_POST["credit"])){
				$credit=$_POST["credit"];
			}
			else{
				$err_credit="*Credit must be numeric";
				$hasError = true;
			}
		}
		if(empty($_POST["cgpa"])){
			$err_cgpa="*CGPA Required";
			$hasError = true;
		}
		else if(strlen($_POST["cgpa"])<1){
			$err_cgpa="*Cgpa should be 4 number";
			$hasError = true;
		}
		else{
			
			$cgpa=$_POST["cgpa"];
			
		}
		if(empty($_POST["dept_id"])){
			$err_dept="*dept_id Required";
			$hasError = true;
		}
		else if(strlen($_POST["dept_id"])<1){
			$err_dept="*Department should be 1 number";
			$hasError = true;
		}
		else{
			if(ctype_digit($_POST["dept_id"])){
				$dept_id=$_POST["dept_id"];
			}
			else{
				$err_dept="*dept_id must be numeric";
				$hasError = true;
			}
		}
		if(!$hasError){
			$query= "insert into students values(NULL,'$name','$dob',$credit,$cgpa,$dept_id)";
			$result = execute($query);
			
			if(count($result)>0){
				
				echo "User inserted";
			}
			else{
				echo "Can not insert user";
			}
		}
	}

?>

<html>
	<head>
	</head>
	<body>
			<form action="" method="post">
				<table align="center">
				
					<tr>
						<td><span>Name:</span> </td>
						<td><input type="text" name="name"><span style="color:red"><?php echo $err_name;?></span></td>
					</tr>
					<tr>
						<td>Date of Birth:</td>
						<td><select name="day">
								<option>Day</option>
								
								<?php
									for($i=1;$i<=31;$i++){
										echo "<option>$i</option>";	
									}
								?>
							</select>
							<select name="month">
								<option>Month</option>
								
								<?php
								    $month = array("January","February","March","April","May","June","July","August","September","October","November","December",);
									foreach($month as $v){
										echo "<option>$v</option>";
										
									}
								?>
							</select>
							<select name="year">
								<option>Year</option>
								
								<?php
									for($y=2021;$y>=1900;$y--){
										echo "<option>$y</option>";
									}
								?>
							</select>
						</td>
					</tr>
					<tr>
						<td><span>Credit:</span></td>
						<td><input type="text" name="credit"><span style="color:red"><?php echo $err_credit;?></span></td>
					</tr>
					<tr>
						<td><span>CGPA:</span></td>
						<td><input type="text" name="cgpa"><span style="color:red"><?php echo $err_cgpa;?></span></td>
					</tr>
					<tr>
						<td><span>Department:</span></td>
						<td><input type="text" name="dept_id"><span style="color:red"><?php echo $err_dept;?></span></td>
					</tr>
					<tr>
						<td colspan="2" align="center"><input type="submit"  value="Add Student" name="login">
					</tr>
				</table>
			</form>
		
	</body>
</html>