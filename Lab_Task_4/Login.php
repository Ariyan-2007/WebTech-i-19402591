<!DOCTYPE HTML>
	<html>
	<head>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>
	<body>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>LOGIN</title>
<h1><center>The XCompany</center></h1>

<div class="menu">
<?php include 'menu.php';?>
</div>

<?php 

session_start();

$username="admin";
$password="admin";

if (isset($_POST['uname'])) {
	if ($_POST['uname']==$username && $_POST['pass']==$password) {
		$_SESSION['uname'] = $username;
		header("location:Logged_in_dashboard.php");
	}
	else{
		$msg="username or password invalid";
		echo "<script>alert('uname or pass incorrect!')</script>";
	}

}

 ?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
	
		
		<fieldset>
			<legend><h2>Login</h2></legend>
		
		<?php if(isset($msg)){?>
		    <h4><?php echo $msg;?></h4>
		    
    	<?php } ?>
		 
			User Name:
			<input type="text" name="uname">
	         <br><br>
			Password:
			<input type="password" name="pass">
	        <br><br>

	        <input type="checkbox"  name="remember" value="remembered">
	         <label for="remember">Remember Me</label>
	         <br><br>

			<?php
echo '<a href="Logged_in_dashboard.php"><input type="submit" name="login" value="Submit"></a>
         <a href="Forgot_Password.php">Forgot Password?</a>';
?>
		

	</fieldset>
	<?php include 'footer.php';?>
</form>

</form>
</body>
</html>
