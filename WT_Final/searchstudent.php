	<?php
       require_once "controllers/searchstudentcontroller.php";
	   require_once "models/db_config.php";
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
				<td>:<input type="radio" value="Male" name="gender">Male<input type="radio" value="Female" name="gender">Female 
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
					<td>:<textarea  name="comment"> </textarea>
					<span style="color:red"><?php echo $err_comment;?></span></td>
					
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="search" name = "search" ></td>
				</tr>

			</table>


		</form>
	</body>
</html>