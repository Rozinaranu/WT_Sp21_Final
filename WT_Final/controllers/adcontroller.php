<?php
  require_once "models/db_config.php";
             
			$title="";
			$err_title=""; 
			
			$name="";
			$err_name="";
			
			$uname="";
			$err_uname="";
			
			$id="";
			$err_id="";
			
	        $email="";
			$err_email="";
			
		    $Extrainfo="";
			$err_Extrainfo="";
		    $hasError=false;
			
			 if($_SERVER['REQUEST_METHOD']== "POST"){
				    $title=$_POST["title"];
		            $name=$_POST["name"];
					$uname=$_POST["uname"];
					$id=$_POST["id"];
			        $email=$_POST["email"];
				 $Extrainfo=$_POST["Extrainfo"];
				  
				if(isset($_POST["Submit"])){
			
				if(empty($_POST["title"])){                                       
					$err_title="*title required";
					$hasError=true;
				}
				
				else{
					$title=$_POST["title"];
				}
				
			    if(empty($_POST["name"])){                                       
					$err_name="*write your name";
					$hasError=true;
				}
				
				else{
					$name=$_POST["name"];
				}
			    if(empty($_POST["uname"])){                                       
					$err_uname="*username required";
					$hasError=true;
				}
				
				else{
					$uname=$_POST["uname"];
				}
				if(empty($_POST["id"])){                                       
					$err_id="*id  required";
					$hasError=true;
				}
				
				else{
					$id=$_POST["id"];
				}
				if(empty($_POST["email"])){                                       
					$err_email="*email need";
					$hasError=true;
				}
				
				else{
					$email=$_POST["email"];
				}
				if(empty($_POST["Extrainfo"])){
					$err_Extrainfo="*write extra information";
						$hasError=true;
				}
				
				else{
					$Extrainfo=$_POST["Extrainfo"];
				}
						if(!$hasError){
							//echo "ddf";
				$query="insert into `tutor_advertisement`(`title`, `name`, `uname`, `id`, `email`, `Extrainfo`) values('$title','$name','$uname','$id','$email','$Extrainfo')";
						
	                    //echo $query;
		                $result = execute($query);
	 }
	 }
			 
}
?>	
<?php
   $query="select * from tutor_advertisement";
	$result= get($query);

?>

<div>
	
	<table border="1" style=border-collapse:collapse;>
		
			<tr>
			<td>Title</td>
			<td> Name  </td>
			<td> Username </td>
		
			<td> Tutor id  </td>
			<td> Email adress </td>
			
			<td>Extra info</td>
		
			</tr>


	<?php
		foreach($result as $row)
		{
			echo "<tr>";
			echo "<td>".$row["title"]."</td>";
		    echo "<td>".$row["name"]."</td>";
			echo "<td>".$row["uname"]."</td>";
			echo "<td>".$row["id"]."</td>";
			echo "<td>".$row["email"]."</td>";
			echo "<td>".$row["Extrainfo"]."</td>";
		
			echo "</tr>";

		}
		
		   
		   
		?>
			</table>
</div>	 
				
				
				  
				   
				   