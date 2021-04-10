<?php
	
			$name="";
			$err_name="";
			     
			$email="";
			$err_email="";
				
			$code="";
			$number="";
			$phone[]=$code . $number;
			$err_phone="";
			$extrainfo="";
			$err_extrainfo="";




                   if($_SERVER['REQUEST_METHOD']== "POST"){
					   if(empty($_POST["name"])){
					$err_name="*Enter your name ";  
				}
				else{
					$name=$_POST["name"];
				}
					if(empty($_POST["email"])){
					$err_email="*Email Required";
				}
				else if(strpos($_POST["email"],"@")!=null){
					$s= strpos($_POST["email"],"@");
					if(strpos($_POST["email"],".",$s+1)!=null){
						$email=$_POST["email"];
					}
					else{
						$err_email="*Email missing (.) after @";
					}
				}
				else{
					$err_email="*Email missing @";
					
				}
				   }
				   
				   	if(empty($_POST["code"])&&empty($_POST["number"])){
					$err_phone="*Phone Code/Number Required";
				}
				else if(empty($_POST["code"])){
					$err_phone="Code required";
					
					
				}
				else if(empty($_POST["number"])){
					$err_phone="*Number Required";
				}
				else{
					if(ctype_digit($_POST["code"])&&ctype_digit($_POST["number"])){
						$number=$_POST["number"];
						$code=$_POST["code"];
				    }
					else{
						$err_phone="*Number must be numeric";
					}
					
				}
				
						if(empty($_POST["extrainfo"])){
					$err_extrainfo="*this  Box is Empty";
				}
				
				else{
					$extrainfo=$_POST["extrainfo"];
				}
				
				
				
				
				





?>







<html> 
  
    <body style="background-color:powderblue;">
     	<fieldset style="width:600px;border:solid 2px" >
			<legend> <h1> Contact with this Tutor  </h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px">
				  
					 <tr>
						<td><span>Name</span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					
					
					
					
					
					
					
					<tr>
						<td><span>Email  </span></td>
						<td>:<input size="29" type="text" value="<?php echo $email;?>" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
				
				<tr>
						<td><span>Phone </span></td>
						<td>:<input size="8" type="text" placeholder="code" value="<?php echo $code;?>" name="code"> - <input style="margin-left:2.3px" size="14" type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span> Details Information  :</span></td>
						<td><textarea value="<?php echo $Extrainfo;?>" name="extrainfo"></textarea>
						<span style="color:red"><?php echo $err_extrainfo;?></span></td>
					</tr>
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Contact tutor  "></td>
				
				</tr>
				</html>