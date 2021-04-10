		
		<?php 
            $district="";
			$err_district="";
			
			$class="";
			$err_class="";
			
			$area="";
			$err_area="";
			
			$subject="";
			$err_subject="";
			
			
			$gender="";
			$err_gender="";
			
			$day="";
			$err_day="";
			
		    $salary="";
	        $err_salary="";
		   
		   	$medium="";
			$err_medium="";
			
			$salary="";
			$err_salary="";
			
				$day="";
			$err_day="";
			
			
				$comment="";
			$err_comment="";
		   
		   if($_SERVER['REQUEST_METHOD']== "POST"){
			   	if(empty($_POST["class"])){                                   
					$err_class="*please select a class";
				}
				
				else{
					$class=$_POST["class"];
				}
				
				
					if(empty($_POST["district"])){                                   
					$err_district="*please select district";
				}
				
				else{
					$district=$_POST["district"];
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
				
					if(empty($_POST["medium"])){
					$err_medium="this field is mandatory";  
				}
				else{
					$medium=$_POST["medium"];
				}
			
					if(empty($_POST["area"])){
					$err_area="select an area ";  
				}
				else{
					$area=$_POST["area"];
				}
					
				if(empty($_POST["day"])){                                       
					$err_day="*select one from below";
				}
				
				else{
					$day=$_POST["day"];
				}
					
				if(empty($_POST["salary"])){                                       
					$err_salary="*select salary range";
				}
				
				else{
					$salary=$_POST["salary"];
				}
				
						
				if(empty($_POST["comment"])){                                       
					$err_comment="*leave a message";
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
			
			
			
		
		
			
		
		   }
		?>
		
		
		
		
		
		
		<html> 
		   <title> Search For Student</title> 
		   <fieldset style="width:800px;border:solid 2px" >
		    <body style="background-color:powderblue;">
			<legend> <h1> Search Students</h1></legend>
			
		      
			  <form action="" method="post">
			   <table>
			   <tr>
					<td><span> Select District  </span></td>
					<td>:
						<select name="district"  >
						<option> </option>
							<option>Dhaka </option>
							<option>NarayanGanj </option>
							<option>Faridpur  </option>
						    <option>Gopalganj </option>
							<option>Gazipur </option>
							<option>kishoreganj </option>
							<option>Rajbari </option>
							<option>Narsingdi </option>
							<option>Shariatpur</option>
							<option>Tangail </option>
						</select> 
							<span style="color:red"><?php echo $err_district;?></span></td>
					
						   <tr>
					<td><span> Select Area  </span></td>
					<td>:
						<select name="area">
						<option> </option>
							<option>Bashudara Residential area  </option>
							<option>Mirpur  </option>
							<option>Savar  </option>
							<option>Uttara  </option>
							<option>tangail area  </option>
							<option>Badda </option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_area;?></span></td>
				
					
					
					<tr>
					<td><span>Select Class </span></td>
					<td>:
						<select name=" class">
						<option> </option>
							
							<option>  Kg*  </option>
							<option> Nursery</option>
							<option>playpen </option>
							<option>class 1 </option>
							<option>class 2</option>
							<option> class 3 </option>
						     <option>class 4</option>
							<option>class 5</option>
							<option> class 6</option>
							<option>class 7 </option>
							<option>class 8</option>
							<option> class 9 </option>
							<option>class 10</option>
							<option> class 11 </option>
						     <option>class 12 </option>
							<option>Secondary</option>
							<option> Higher Secondary </option>
							<option>Admission test </option>
							<option>others</option>
						
						</select> 
					<span style="color:red"><?php echo $err_class;?></span></td>
				</tr>
					
				<tr>
					<td><span> Select Gender</span></td>
				<td>:<input type="radio" value="Male" name="Select Gender">Male<input type="radio" value="Female" name="gender">Female 
				<span style="color:red"><?php echo $err_gender;?></span></td>
					
				</tr>
				
				
				<tr>
					<td><span>Select Medium  </span></td>
					<td>:
					
						<select name="medium" >
						<option> </option>
							<option>Bangla</option>
							<option>English</option>
							<option>Religious Studies </option>
						     <option>Arts </option>
							<option>Admission Test </option>
							<option>Special Skill Learning  </option>
							
						</select> 
					<span style="color:red"><?php echo $err_medium;?></span></td>
					
				</tr>
					<tr>
					<td><span>Select Subject </span></td>
					<td>:
						<select name="subject">
						<option> </option>
							
							<option>  All Subject </option>
							<option> Accounting </option>
							<option>Finance  </option>
							<option>oop1</option>
							<option>object oriented programmin 2</option>
							<option> Bangla </option>
						     <option>Physics</option>
							<option>Chemistry</option>
							<option> Biology</option>
							<option>marketing  </option>
							<option>Arabic </option>
							<option>English </option>
							<option>Admission </option>
							<option> Writing  </option>
						     <option>Art</option>
							
							<option>Admission test </option>
							<option>others</option>
						
						</select> 
						<span style="color:red"><?php echo $err_subject;?></span></td>
				
			
				  <tr>
				<td>Day per week </td>
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
					<td><span> Leave a comment  </span></td>
					<td>:<textarea  name="Leave a comment " name="comment"></textarea>
					<span style="color:red"><?php echo $err_comment;?></span></td>
					
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="search"></td>
				</tr>

			</table>


		</form>
	</body>
</html>