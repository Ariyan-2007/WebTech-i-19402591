<?php 

session_start();

if (isset($_SESSION['uname'])) {
	session_destroy();
	header("location:Login.php");
	
}

else{
	header("location:Login.php");
}

 ?>


