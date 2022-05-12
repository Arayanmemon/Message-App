<?php
session_start();

$conn = new mysqli("localhost", "root", "" , "ex");

$e=$_GET['Email'];
$p=$_GET['pass'];


$sql = "SELECT id,username, password, email FROM users WHERE email ='$e' AND password='$p' ";
$result = $conn->query($sql);
	
  if($row = $result->fetch_assoc()) {
    
    	 $_SESSION['a'] = $row["id"];
    	  header("location:inbox.php");  
       
  }
  else{
    echo "error";
  		// header("location:register.php?error=2");
  	  }
?>