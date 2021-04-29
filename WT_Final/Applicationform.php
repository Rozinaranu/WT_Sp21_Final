 

 
 <?php
		 require_once "controllers/Tutotcontroller.php";
		require_once "models/db_config.php";
		
		
?>
	<?php
   $query="select * from tutor_table";
	$result= get($query);

?>

<div>
	
	<table border="1" style=border-collapse:collapse;>
		
			<tr>
			<td> Fullname</td>
			<td> email </td>
			
			<td>Adress</td>
		
			<td>preferred subject</td>
			<td>preferred background medium</td>
		

	
            <td>Day per week</td>
			<td>salary range</td>
		
			<td>About yourself</td>
			</tr>


	<?php
		foreach($result as $row)
		{
			echo "<tr>";
		    echo "<td>".$row["name"]."</td>";
			
			echo "<td>".$row["email"]."</td>";
		
			echo "<td>".$row["adress"]."</td>";
		
		
			echo "<td>".$row["subject"]."</td>";
			
			echo "<td>".$row["bm"]."</td>";
			//echo "<td>".$row["pclass"]."</td>";
			//echo "<td>".$row["area"]."</td>";
			//echo "<td>".$row["timeshift"]."</td>";
			echo "<td>".$row["day"]."</td>";
			echo "<td>".$row["salary"]."</td>";
			//echo "<td>".$row["exp"]."</td>";
			echo "<td>".$row["comment"]."</td>";


		
			echo "</tr>";

		}
			
			
			
		
		   
		   
		?>
			</table>
</div>

<html>
	<head></head>
	<body style="background-color:white;">
		
		<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Tutor Application Form </h1></legend>
			<form action="" method="post">
				<table style="margin-left:5px">
				  
					 <tr>
						<td><span> Fullname</span></td>
						<td>:<input size="29" type="text" value="<?php echo $name;?>" id="name" name="name" onfocusout="executeName(this)"><span id="err_name"> </span> <br>
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
				
					
				    <tr>
						<td><span>Email  </span></td>
						<td>:<input size="29" type="text" id="email" name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					
			
				
					
				    <tr>
						<td><span>  Adress  </span></td>
						<td>:<input size="29" type="text" id="adress" name="adress">
						<span style="color:red"><?php echo $err_adress;?></span></td>
						
					</tr>
					
					
			
					
					<tr>
					<td><span> preferred Subject </span></td>
					<td>:
						<select id="subject" name="subject">
						<option> </option>
							<option>English  </option>
							<option>Bangla  </option>
							<option>Math  </option>
							<option>Chemistry  </option>
							<option>Physics </option>
							<option> Domestic Science  </option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_subject;?></span></td>
					</tr>
						
						
					<tr>
					<td><span> preferred Background Medium</span></td>
					<td>:
						<select id="bm"  name="bm">
						<option> </option>
							<option>English medium   </option>
							<option>Bangla medium   </option>
							<option>Arabic  </option>
							<option>arts  </option>
							<option>others</option>
							<option> Admission test</option>
						  </select> 
						  	
						<span style="color:red"><?php echo $err_bm;?></span></td>
						</tr>
						
					
						
				 <tr>
				 <td>Days per week </td>
			     <td>:
				      <select id="day" name="day">
				  <option> </option>
				  <?php
					for($i=1;$i<=7;$i++){
					echo "<option>$i</option>";	
						}
						?>
					
						
					</select>
					<span style="color:red"><?php echo $err_day;?></span>
					</td>
					</tr>
						
						
					<tr>
						<td>salary range  </td>
							        <td>:
								<select id="salary"  name="salary">
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
					<td><span> About Yourself </span></td>
					<td>:<textarea  id="comment" name="comment"></textarea>
					<span style="color:red"><?php echo $err_comment;?></span></td>
					
				</tr>
					
					<tr>
						<td align="center" colspan="2"><input type="submit" value="Apply " name="Apply"></td>
					</tr>
					
					
				</table>
				 
				
			</form>
		</fieldset>	
	</body>
			<script>
	function executeName(control){
		var name = control.value;
	
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				
				var rsp = this.responseText;
				rsp=rsp.trim();
				if(rsp == "true"){
					document.getElementById("err_name").innerHTML = "<br>Valid";
				}else{
					document.getElementById("err_name").innerHTML = "<br>Not Valid";
				}
			}
		};
		xhttp.open("GET","checkname.php?name="+name,true);
		xhttp.send();
	}
</script>
</html>