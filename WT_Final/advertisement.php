
 <?php
		 require_once "controllers/adcontroller.php";
		 require_once "models/db_config.php";
	
		
		
?>
<html>
	<head></head>
	<body style="background-color:powderblue;">
	<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Tution Advertisement</h1></legend>
			<form action="" method="post">
				<table border="1" style="margin-left:5px">
				    
					 <tr>
						<td align="right"><span> Title  </span></td>
						<td>:<input size="29" type="text"  name="title">
						<span style="color:red"><?php echo $err_title;?></span></td>
						
					</tr>
					
				    
					 <tr>
						<td align="right"><span> Name </span></td>
						<td>:<input size="29" type="text"  name="name">
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
				
				    
					 <tr>
						<td align="right"><span> username </span></td>
						<td>:<input size="29" type="text"  name="uname">
						<span style="color:red"><?php echo $err_uname;?></span></td>
						
					</tr>
					 <tr>
						<td align="right"><span> Tutor id </span></td>
						<td>:<input size="29" type="text"  name="id">
						<span style="color:red"><?php echo $err_id;?></span></td>
						
					</tr>
					<tr>
						<td align="right"><span> Email </span></td>
						<td>:<input size="29" type="text"  name="email">
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
						<tr>
					<td align="right"><span> Extra Information </span></td>
					<td>:<textarea value="<?php echo $Extrainfo;?>" name="Extrainfo"></textarea>
					<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
				</tr>
				<tr>
					<td align="center" colspan="2"><input type="submit" value="Submit" name="Submit"></td>
				</tr>
					
				</table>
				 
				
			</form>
		</fieldset>	
	</body>
</html>