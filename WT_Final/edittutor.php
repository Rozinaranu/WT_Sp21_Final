<?php
		 require_once "controllers/Edittutorcontroller.php";
		require_once "models/db_config.php";
		
		
?>
<?php
   $query="select * from updatetutor";
	$result= get($query);

?>

<div>
	
	<table border="1" style=border-collapse:collapse;>
		
			<tr>
			<td> Tutorname</td>
			<td>Change Email </td>
			<td>Edit adress </td>
			
			<td>Moredetails</td>
		
			</tr>


	<?php
		foreach($result as $row)
		{
			echo "<tr>";
		    echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["adress"]."</td>";
			
			echo "<td>".$row["Extrainfo"]."</td>";
		
			


		
			echo "</tr>";

		}
		
		   
		   
		?>
			</table>
</div>
	
<html> 
<body style="background-color:powderblue;">

      	<fieldset style="width:800px;border:solid 2px" >
			<legend> <h1>Edit and Update profile </h1></legend>
			<form action="" method="post" onsubmit="return validate()">
				<table style="margin-left:5px">
				  
					 <tr>
						<td><span> Tutor Name </span></td> <br>
						<td>: <input size="29" type="text" id="name" name="name" onfocusout="executename(this)"> <span id="err_name"> </span> <br>
						<span style="color:red"><?php echo $err_name;?></span></td>
						
					</tr>
					<tr>
						<td><span> E-Mail </span></td>
						<td>: <input size="29" type="text" id="email" name="email" onfocusout="execute(this)" > <span id="err_email"> </span> <br> 
						<span style="color:red"><?php echo $err_email;?></span></td>
						
					</tr>
					<tr>
						<td><span> Edit Adress </span></td> <br>
						<td>: <input size="29" type="text" id="adress" name="adress" onfocusout="execute(this)" > <span id="err_adress"> </span> <br>
						<span style="color:red"><?php echo $err_adress;?></span></td>
						
					</tr>
					
					<tr>
						<td><span>More Details </span></td>
						<td>:<textarea  id="Extrainfo" name="Extrainfo" onfocusout="execute(this)"></textarea> <span id="err_Extrainfo"> </span> 
						<span style="color:red"><?php echo $err_Extrainfo;?></span></td>
					</tr>
						
				
				
						<tr>
						<td align="center" colspan="2"><input type="submit" value="Submit " name="Submit"></td>
					</tr>
					
					</fieldset>
					</body>
					<script>
					function get (id){
						return document.getElementById(id);
					}
					function validate(){
						cleanUp();
			         var hasError=false;
						//var err_msg="";
					if(get("name").value == ""){
						//get("name").focus();
				get("err_name").innerHTML="*Name Required*";
				get("err_name").style.color="purple";
				hasError=true;
						}
					if(get("email").value == ""){
				get("err_email").innerHTML="*email Required*";
				hasError=true;
				
						}
					if(get("adress").value == ""){
				get("err_adress").innerHTML="*adress Required*";
				hasError=true;
						}
					if(get("Extrainfo").value == ""){
				get("err_Extrainfo").innerHTML="*Required*";
				hasError=true;
						}	
				if(!hasError){
				return true;
				
			}
						//alert(err_msg);
						return false;
					}
					function cleanUp(){
			get("err_name").innerHTML = "";
			get("err_email").innerHTML="";
			get("err_adress").innerHTML="";
			get("err_Extrainfo").innerHTML="";
		}
		</script>
		<script>
	function executename(control){
		var name = control.value;
		//var email= control.value;
		//var adress= control.value;
		//var Extrainfo= control.value;
	
		var xhttp = new XMLHttpRequest();
		xhttp.onreadystatechange=function(){
			if(this.readyState == 4 && this.status == 200){
				
				var rsp = this.responseText;
				//debugger;
				rsp=rsp.trim();
				if(rsp == "true"){
					
					document.getElementById("err_name").innerHTML = "<br>***Valid";
					//document.getElementById("err_email").innerHTML = "<br>***Valid";
					//document.getElementById("err_adress").innerHTML = "<br>***Valid";
					//document.getElementById("err_Extrainfo").innerHTML = "<br>***Valid";
					
				}else{
					document.getElementById("err_name").innerHTML = "<br>***Not Valid";
					//document.getElementById("err_email").innerHTML = "<br>***Not Valid";
					//document.getElementById("err_adress").innerHTML = "<br>***Not Valid";
					//document.getElementById("err_Extrainfo").innerHTML = "<br>***Not Valid";
				}
				
			}
		};
		xhttp.open("GET","checkusername.php?name="+name,true);
		//xhttp.open("GET","checkusername.php?email="+email,true);
		//xhttp.open("GET","checkusername.php?adress="+adress,true);
		//xhttp.open("GET","checkusername.php?Extrainfo="+Extrainfo,true);
	
		xhttp.send();
		//xhttp.send();
	}
</script>
</html>