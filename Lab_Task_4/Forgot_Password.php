<?php 


session_start();

 ?>


 <!DOCTYPE HTML>
	<html>
	<head>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>
	<body>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>FORGOT PASSWORD</title>
<h1><center>The XCompany</center></h1>

<div class="menu">
<?php include 'menu.php';?>
</div>



<?php
	

	 $emailErr= "";
	 $email = "";
	$flag=1;


   if (empty($_POST["email"])) {
	    $emailErr = "Email is required";
	    $flag=0;
	  } else {
	    $email = test_input($_POST["email"]);
	    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	      $emailErr = "Invalid email format";
	      $flag=0;
	    }
	  }



	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>



	<fieldset>
	    <legend><h1>FORGOT PASSWORD</h1></legend>
	    
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">


     <label>Enter email</label>
			<input type="email" name="email">
		</div>
		<div class="form-group">
			<button type="submit" name="reset-password" class="login-btn">Submit</button>
		</div>




</fieldset>

<?php include 'footer.php';?>
</form>

</form>
</body>
</html>