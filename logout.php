<?php
session_start();

if (isset($_SESSION['a'])) {
	unset($_SESSION['a']);
	header("location:login.php?logout");
}


?>