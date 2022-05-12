<?php

$conn = new mysqli("localhost", "root", "" , "ex");
$e= $_GET['email'];


$sqel = "SELECT email FROM users WHERE email='$e'";
$result = $conn->query($sqel);
	if ($row = $result->fetch_assoc()){
    	  header("location:login.php?error=1");  
    	}
  
    
  	else{


$u= $_GET['username'];
$ps=$_GET['password'];

 
$sql = "INSERT INTO users (username, email, password)
VALUES ('$u','$e' ,$ps)";
   $b = $conn->query($sql);

   if( $b ){
   	header("location:login.php");
   }else{
   	echo "not inserrted";
   }

}

?>