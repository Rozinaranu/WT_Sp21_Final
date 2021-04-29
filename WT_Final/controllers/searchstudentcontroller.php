<?php 
	 require_once "models/db_config.php";
		
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
			  
			$hasError=false;
			
		   
		   if($_SERVER['REQUEST_METHOD']== "POST"){
			   	   $district=$_POST["district"];
					$area=$_POST["area"];
					$class=$_POST["class"];
					
					$gender=$_POST["gender"];
					//var_dump($gender);
					
					$medium=$_POST["medium"];
					$subject=$_POST["subject"];
		   	      $day=$_POST["day"];
						$sls="/";
		     	$salary=$_POST["salary"];
		   	    $comment=$_POST["comment"];
				
			if(isset($_POST["search"])){
			   	if(empty($_POST["class"])){                                   
					$err_class="*please select a class";
					$hasError=true;
				}
				
				else{
					$class=$_POST["class"];
				}
				
				
				if(empty($_POST["district"])){                                   
					$err_district="*please select district";
					$hasError=true;
				}
				
				else{
					$district=$_POST["district"];
				}
			   
			   
			   
			   
			   	if (!isset($_POST["gender"])){
                    $err_gender="*Gender Not Selected";
					$hasError=true;
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
					$hasError=true;
				}
				else{
					$medium=$_POST["medium"];
				}
			
					if(empty($_POST["area"])){
					$err_area="select an area "; 
					$hasError=true;
				}
				else{
					$area=$_POST["area"];
				}
					
				if(empty($_POST["day"])){                                       
					$err_day="*select one from below";
					$hasError=true;
				}
				
				else{
					$day=$_POST["day"];
				}
					
				if(empty($_POST["salary"])){                                       
					$err_salary="*select salary range";
					$hasError=true;
				}
				
				else{
					$salary=$_POST["salary"];
				}
				
						
				if(empty($_POST["comment"])){                                       
					$err_comment="*leave a message";
					$hasError=true;
				}
				
				else{
					$comment=$_POST["comment"];
				}
				
					if(empty($_POST["subject"])){                                       
					$err_subject=" *Choose a subject";
					$hasError=true;
				}
				
				else{
					$subject=$_POST["subject"];
				}
			
						if(!$hasError){
							//echo "queryblock";
					
				
					
		$query= "insert into `search_student`(`district`, `area`, `class`, `gender`, `medium`, `subject`, `day`, `salary`, `comment`) values('$district','$area','$class','$gender','$medium','$subject','$day','$salary','$comment')";
		$result = execute($query);
						
				
				 }
				}
				
				
				
		   }
		   
				
				?>
<?php
   $query="select * from search_student";
	$result= get($query);

?>


<div>
	<h1> Search Board </h1>
	<table border="1" style=border-collapse:collapse;>
		
			<tr>district</tr>
			<tr> area</tr>
			<tr>class</tr>
			<tr>gender</tr>
			<tr>medium</tr>
            <tr>subject</tr>
			<tr>Day </tr>
			<tr>salary range </tr>
			<tr>comment</tr>

		
		<?php
		foreach($result as $row)
		{
			echo "<tr>";
		    echo "<td>".$row["district"]."</td>";
			echo "<td>".$row["area"]."</td>";
			echo "<td>".$row["class"]."</td>";
			echo "<td>".$row["gender"]."</td>";
			echo "<td>".$row["medium"]."</td>";
			echo "<td>".$row["subject"]."</td>";
			echo "<td>".$row["day"]."</td>";
			echo "<td>".$row["salary"]."</td>";
			echo "<td>".$row["comment"]."</td>";

		
			echo "</tr>";

		}
		   
		   
		?>
			
		
	</table>
</div>
				
		   

	
	

				
		   
				
		   
		

		  
				

		
		