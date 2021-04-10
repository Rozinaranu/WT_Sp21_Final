

<?php

			$name="";
			$err_name="";
			
			$email="";
			$err_email="";
			
			$newemail="";
			$err_newemail="";
			
			$conemail="";
			$err_conemail="";
			
			$instituate="";
			$err_instituate="";
			
			$einstituate="";
			$err_einstituate="";
			
			$salary="";
	        $err_salary="";
			
			$Extrainfo="";
			$err_Extrainfo="";
			
				
			$qualification="";
			$err_qualification="";
			
			
			$code="";
			$number="";
			$phone[]=$code . $number;
			$err_phone="";
			
			$timeshift="";
			$err_timeshift="";
			
			
			$location[]=array();
			$street="";
			$city="";
			$state="";
			$zcode="";
			$err_location="";
			
			
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
				if(empty($_POST["newemail"])){                                       
					$err_newemail=" *Type a new email adress";
				}
				
				else{
					$newemail=$_POST["newemail"];
				}
				
					if(empty($_POST["conemail"])){                                       
					$err_conemail=" *Confirm email adress";
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
				if(empty($_POST["street"])||empty($_POST["city"])){
					$err_location="*please provide your location";
				}
				else{
					$street=$_POST["street"];
					$city=$_POST["city"];
					}
			
				if(!empty($_POST["sources"])){
                    foreach($_POST["sources"] as $checked){
                        //echo $checked . '<br>';
                    }
                }
				
				else{
					$conemail=$_POST["conemail"];
				}
				if(empty($_POST["instituate"])){
					$err_instituate="*write your institiation name";  
				}
				else{
					$instituate=$_POST["instituate"];
				}
				if(empty($_POST["einstituate"])){
					$err_einstituate="*Update  your institiation name";  
				}
				else{
					$einstituate=$_POST["einstituate"];
				}
					if(empty($_POST["timeshift"])){
					$err_timeshift="*select time  ";  
				}
				else{
					$timeshift=$_POST["timeshift"];
				}
					if(empty($_POST["qualification"])){                                   
					$err_qualification="*qualification is required ";
				}
				
				else{
					$qualification=$_POST["qualification"];
				}
					if(empty($_POST["salary"])){                                       
					$err_salary="*Update  salary range";
				}
				
				else{
					$salary=$_POST["salary"];
				}
					if(empty($_POST["Extrainfo"])){
					$err_Extrainfo="*this Box is Empty";
				}
				
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
				
	 }
	 
	 
	 
	 




?>
<html> 
<body style="background-color:powderblue;">

      	<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Edit and Update profile </h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px">
				  
					 <tr>
						<td><span> Tutor Name </span></td> <br>
						<td>: <input size="29" type="text" value="<?php echo $name;?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
						 <tr>
						<td><span> Instituation Name</span></td>
						<td>: <input size="29" type="text" value="<?php echo $instituate;?>" name="instituate">
						<span style="color:red"><?php echo $err_instituate;?></span></td>
						
					</tr>
					 <tr>
						<td><span> Edit Instituation Name</span></td>
						<td>: <input size="29" type="text" value="<?php echo $instituate;?>" name="einstituate">
						<span style="color:red"><?php echo $err_einstituate;?></span></td>
						
					</tr>
			     <tr>
						<td><span> E-Mail </span></td>
						<td>: <input size="29" type="text" value="<?php echo $email;?>" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					  <tr>
						<td><span> new E-Mail  </span></td>
						<td>: <input size="29" type="text" value="<?php echo $newemail;?>" name="newemail">
						<span style="color:blue"><?php echo $err_newemail;?></span></td>
						
					</tr>
					<tr>
						<td><span> Confirm E-Mail </span></td>
						<td>: <input size="29" type="text" value="<?php echo $email;?>" name="conemail">
						<span style="color:red"><?php echo $err_conemail;?></span></td>
								<tr>
						<td><span> Edit PhoneNo</span></td>
						<td>:<input size="8" type="text" placeholder="code" value="<?php echo $code;?>" name="code"> - <input style="margin-left:2.3px" size="14" type="text" placeholder="Number" value="<?php echo $number;?>" name="number">
						<span style="color:red"><?php echo $err_phone;?></span></td>
						
					</tr>
						<tr>
						<td><span>Update Qualification</span></td>
						<td>:<input size="29" type="text" value="<?php echo $qualification;?>" name="qualification">
						<span style="color:red"><?php echo $err_qualification;?></span></td>
						
					</tr>
					
						<tr>
						<td><span>Update Salary Range </span></td>
						<td>:<input size="29" type="text" value="<?php echo $salary;?>" name="salary">
						<span style="color:red"><?php echo $err_salary;?></span></td>
						
					</tr>
					
					
					
					<tr>
						<td><span>Edit TimeShift</span></td>
						<td>:<input size="29" type="text" value="<?php echo $timeshift;?>" name="timeshift">
						<span style="color:red"><?php echo $err_timeshift;?></span></td>
						
					</tr>
						<tr>
						<td style="vertical-align: top" rowspan="3"><span>  Update Location  </span></td>
						<td>:<input size="20" type="text" placeholder="Select location" value="<?php echo $street;?>" name="street">
						</td>
				        </tr>
			
				<tr>		
				  <td> <input style="margin-left:4.9px" size="10" type="text" placeholder="City" value="<?php echo $city;?>" name="city"> <input style="margin-left:2.3px" size="12" type="text" placeholder="Street" value="<?php echo $street;?>" name="street">
			     </td>
			     </tr>
				 <tr>
				 <td>
				 
			       <span style="color:red"><?php echo $err_location;?></span></td>
				</tr>
				
				<tr>
						<td align="right"><span>Extra Information :</span></td>
						<td><textarea value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea>
						<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
						
					</tr>
						<tr>
						<td align="center" colspan="2"><input type="submit" value="Submit "></td>
					</tr>
					