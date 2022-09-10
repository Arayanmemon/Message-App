
<?php 
session_start();
if (isset($_SESSION['a'])){
	header("location:inbox.php");
}


?>


<!DOCTYPE html>
<html>
<head>
<style>
	body 
		{
		font-family: Arial, Helvetica, sans-serif;
		margin-left:25%;
		margin-right:25%;
		border: 1px solid #000000;
		margin-bottom: 5px;
		padding: 0px 15px 0 15px;
		}
	input[type=text], input[type=password] 
		{
		width: 97%;
		padding: 10px;
		margin: 5px 0 22px 0;
		display: inline-block;
		border: none;
		background: #F5F5F5;
		}
	hr 
		{
		border: 1px solid #e6e6e6;
		margin-bottom: 5px;
		}
	.registerbutton
		{
		background-color: #29a329;
		color: white;
		padding: 15px 20px;
		margin: 10px 0px;
		border: none;
		cursor: pointer;
		width: 100%;
		text:bold;
		}
	

</style>
</head>
<body>
	<form action="registerb.php">
		<h1>Register</h1>
		<p>Please fill in this form to create an account.</p>
		<hr>
		
		<label for="username"><b>User Name</b></label>
		<input type="text" placeholder="Enter Your User Name" name="username" required><br>
		
		<label for="email"><b>Email</b></label> 
		<input type="text" placeholder="Enter Your E-mail" name="email" required><br>

		<label for="password"><b>Password</b></label>
		<input type="password" placeholder="Enter Your Password" name="password" required><br>

		<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

		<button type="submit" class="registerbutton">Register</button>
		
  
		
		<p>Already have an account? <a href="login.php">Sign in</a>.</p>
		
	</form>


</body>
</html>
