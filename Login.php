<?php
      $server="localhost";
	  $user="root";
	  $password="";
	  $db="wt-sp21";
	  $conn=mysqli_connect($server,$user,$password,$db);
	  if($conn){
		  echo"connected successfully";
	  }
		  else{
		  echo mysqli_connect_error();
		  }
		  
		  $query="insert into admin values('Admin','Akram','123456')";
		 if( mysqli_query($conn,$query)){
			 echo"value inserted Successfully";
		 }
		 else{
		 "error occured";
		 }
				 
		  
?>

	  