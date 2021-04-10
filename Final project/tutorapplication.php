  <html>
	<head></head>
	<body style="background-color:powderblue;">
	
		<?php
		    
			
			$name="";
			$err_name="";
			
		$medium="";
		$err_medium="";
			
			$gender="";
			$err_gender="";
			
	        $email="";
			$err_email="";
			
			$exp ="";
			$err_exp="";
			
			$instituate="";
			$err_instituate="";
			
			
			
			$code="";
			$number="";
			$phone[]=$code . $number;
			$err_phone="";
			
			
			$comment="";
			$err_comment="";
			
			$subject="";
			$err_subject="";
			
			$bm="";
			$err_bm="";
			
			$day="";
			$err_day="";
			
			
			
			$pclass="";
			$err_pclass="";
			
			$salary="";
	        $err_salary="";
			
			
			$timeshift="";
			$err_timeshift="";
			
			
			
				$area="";
			$err_area="";
			
			$qualification="";
			$err_qualification="";
			
			$location[]=array();
			$street="";
			$city="";
			$state="";
			$zcode="";
			$err_location="";
			
		
	
		
			
			
			
			$sources[]=array();
			$err_sources="";
		
		
			
			if($_SERVER['REQUEST_METHOD']== "POST"){
				
				if(empty($_POST["name"])){
					$err_name="*name Required";
				}
				else if(strlen($_POST["name"])<6){
					$err_name="*name should be at least 6 characters";
				}
				else{
					if(ctype_alnum($_POST["name"])){
					
						$name=htmlspecialchars($_POST["name"]);
				    }
					else{
						
					$err_name="*name only contain characters(space,symbols not allowed)";
					}
				}
				
					if(empty($_POST["salary"])){                                       
					$err_salary="*select salary range";
				}
				
				else{
					$salary=$_POST["salary"];
				}
				
				
				if (!isset($_POST["gender"])){
                    $err_gender="*Gender Not Selected";
                }
				else{
					if (isset($gender) && $gender=="Male"){
						$gender=$_POST["gender"];
					}
					else{
						if (isset($gender) && $gender=="Female"){
							$gender=$_POST["gender"];
						}
				    }
				}
					if(empty($_POST["instituate"])){
					$err_instituate="*write your institiation name";  
				}
				else{
					$instituate=$_POST["instituate"];
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
				if(empty($_POST["instituate"])){
					$err_instituate="*write your institiation name";  
				}
				else{
					$instituate=$_POST["instituate"];
				}
				
				if(empty($_POST["medium"])){
					$err_medium="*select your background medium";  
				}
				else{
					$medium=$_POST["medium"];
				}
				
				
				if(empty($_POST["pclass"])){
					$err_pclass="*select class you want to teach ";  
				}
				else{
					$pclass=$_POST["pclass"];
				}
					if(empty($_POST["street"])||empty($_POST["city"])){
					$err_location="*please provide your location";
				}
				else{
					$street=$_POST["street"];
					$city=$_POST["city"];
					}
				
					
				if(empty($_POST["timeshift"])){
					$err_timeshift="*select time  ";  
				}
				else{
					$timeshift=$_POST["timeshift"];
				}
				
				
				
				
				if(empty($_POST["bm"])){
					$err_bm="*select background medium you want to teach";  
				}
				else{
					$bm=$_POST["bm"];
				}
				
				if(empty($_POST["exp"])){                                   
					$err_exp="*share your experience ";
				}
				
				else{
					$exp=$_POST["exp"];
				}
				
					if(empty($_POST["qualification"])){                                   
					$err_qualification="*qualification is required ";
				}
				
				else{
					$qualification=$_POST["qualification"];
				}
				
			}
				
				
				if(empty($_POST["day"])){                                       
					$err_day="*select one from below";
				}
				
				else{
					$day=$_POST["day"];
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
				else {
                    $err_sources="*Source is not selected";
                }
						
						
						
					
					if(empty($_POST["area"])){
					$err_area=" *area name is required  ";  
				}
				else{
					$area=$_POST["area"];
				}
				
				if(empty($_POST["comment"])){                                       
					$err_comment="*Tell us about yourself";
				}
				
				else{
					$comment=$_POST["comment"];
				}
				if(empty($_POST["subject"])){                                       
					$err_subject=" *Choose a subject";
				}
				
				else{
					$subject=$_POST["subject"];
				}
			
		?>
		
		<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Tutor Application Form </h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px">
				  
					 <tr>
						<td><span>Full name</span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td><span> Gender</span></td>
						<td>:<input type="radio" value="<?php echo $gender;?>" name="gender">Male<input type="radio" value="<?php echo $gender;?>" name="gender">Female
						<span style="color:red"><?php echo $err_gender;?></span></td>
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
						<td style="vertical-align: top" rowspan="3"><span>  Location  </span></td>
						<td>:<input size="29" type="text" placeholder="Select location" value="<?php echo $street;?>" name="street">
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
						<td><span>Background Medium </span></td>
						<td>:<input type="radio" value="<?php echo $medium;?>" name="medium">Bangla <input type="radio" value="<?php echo $medium;?>" name="medium">English
						<input type="radio" value="<?php echo $medium;?>" name="medium">others
						<span style="color:red"><?php echo $err_medium;?></span></td>
					</tr>
					 <tr>
						<td><span>Instituation name</span></td>
						<td>:<input size="29" type="text" value="<?php echo $instituate;?>" name="instituate">
						<span style="color:red"><?php echo $err_instituate;?></span></td>
						
					</tr>
					<tr>
						<td><span>Qualification</span></td>
						<td>:<input size="29" type="text" value="<?php echo $qualification;?>" name="qualification">
						<span style="color:red"><?php echo $err_qualification;?></span></td>
						
					</tr>
						   <tr>
					<td><span> preferred Subject </span></td>
					<td>:
						<select name="subject">
						<option> </option>
							<option>English  </option>
							<option>Bangla  </option>
							<option>Math  </option>
							<option>Chemistry  </option>
							<option>Physics </option>
							<option> Domestic Science  </option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_subject;?></span></td>
						
						
						 <tr>
					<td><span> preferred Background Medium</span></td>
					<td>:
						<select name="bm">
						<option> </option>
							<option>English medium   </option>
							<option>Bangla medium   </option>
							<option>Arabic  </option>
							<option>arts  </option>
							<option>others</option>
							<option> Admission test</option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_bm;?></span></td>
						
						
						 <tr>
					<td><span> preferred classes</span></td>
					<td>:
						<select name="pclass">
						<option> </option>
							<option>class-1  </option>
							<option>class-2  </option>
							<option>class-3 </option>
							<option>class-4  </option>
							<option>Class-5</option>
							<option> Class-6</option>
							<option>class-7 </option>
							<option>class-8 </option>
							<option>class-9 </option>
							<option>class-10 </option>
							<option>Admission test</option>
							<option>others </option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_pclass;?></span></td>
								
					 <tr>
						<td><span>Preferred Area</span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" name="area">
						<span style="color:red"><?php echo $err_area;?></span></td>
						
					</tr>
						
						
							 <tr>
					<td><span>Timing Shift </span></td>
					<td>:
						<select name="timeshift">
						<option> </option>
						
							<option>Morning  </option>
							<option>Afternoon </option>
							<option>evening </option>
							<option>night </option>
							<option> After Magrib</option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_timeshift;?></span></td>
						
						
							
				  <tr>
				<td>Days per week </td>
			   <td>:
				<select name="day">
				<option> </option>
				<?php
					for($i=1;$i<=7;$i++){
					echo "<option>$i</option>";	
						}
						?>
					
						
					</select>
					<span style="color:red"><?php echo $err_day;?></span>
					</td>
						<tr>
								
								<td>salary range  </td>
							        <td>:
								<select name="salary">
								<option> </option>
								
								<?php
								    $salary = array("1000tk/month","2000tk/month","3000tk/month","4000tk/month","5000tk/month","6000tk/month","7000tk/month","8000tk/month","9000tk/month","10,000tk/month");
									foreach($salary as $v){
										echo "<option>$v</option>";
										
									}
								?>
								</select>
									<span style="color:red"><?php echo $err_salary;?></span>
							
						</td>
					</tr>
				
						   <tr>
					<td><span> Tuition Experience  </span></td>
					<td>:
						<select name="exp">
						<option> </option>
							<option>none </option>
							<option>1 years  </option>
							<option>2 years   </option>
							<option>5 years  </option>
							<option>3 years </option>
							<option> 4 years  </option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_exp;?></span></td>
						
					
						
				 
				 
					
					<tr>
						<td rowspan="4" align="right"><span>Where did you hear about tuition station?</span></td>
						<td> <input type="checkbox" value="<?php echo $sources;?>" name="sources[]">A Friend or Colleage </td>
							 
					</tr>
					<tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Google </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">Blog Post </td>
				    </tr>
				    <tr>
						<td><input type="checkbox" value="<?php echo $sources;?>" name="sources[]">News Article
						<span style="color:red"><?php echo $err_sources;?></span></td>
				    </tr>
						   <tr>
					
				
				
					<tr>
					<td><span> About Yourself </span></td>
					<td>:<textarea  name="Leave a comment " name="comment"></textarea>
					<span style="color:red"><?php echo $err_comment;?></span></td>
					
				</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Apply "></td>
					</tr>
					
					
				</table>
				 
				
			</form>
		</fieldset>	
	</body>
</html>