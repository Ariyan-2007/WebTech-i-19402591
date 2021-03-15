<!DOCTYPE HTML>
	<html>
	<head>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>
	<body>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>CHANGE PASSWORD</title>
<h1><center>The XCompany</center></h1>

<?php 


session_start();

if (isset($_SESSION['uname'])) {

    echo "Logged in as Ariyan<br>";
	echo "<br><a href='Logout.php'>Logout</a><br>";

	

}
else{
		$msg="error";
		header("location:Login.php");
		// echo "<script>location.href='login.php'</script>";
	}

 ?>
<h2>Account</h2>

<ul> <li><a href= "Logged_in_dashboard.php">Dashboard</a></li>
	<li><a href= "View_Profile.php">View Profile</a></li>
	<li><a href= "Edit_Profile.php">Edit Profile</a></li>
	<li><a href= "Change_Profile_Picture.php">Change Profile Picture</a></li>
	<li><a href= "Change_Password.php">Change Password</a></li>
	<li><a href= "Logout.php">Logout</a></li>
</ul>


   <?php
	   $cpassword=$npassword=$rnpassword="";
	   $cpasswordErr=$npasswordErr=$rnpasswordErr="";
	

	   if($_SERVER["REQUEST_METHOD"] == "POST")
	   {
	     if (empty($_POST["cpassword"])) {
	       $cpasswordErr = "Current Password is required";
	     }
	     else {
	      $cpassword = test_input($_POST["cpassword"]);
	

	       if (strcmp($cpassword,"mish@#$%")) {
	          $cpasswordErr = "Incorrent Password";
	        }
	

	        }
	

	        if (empty($_POST["npassword"])) {
	          $npasswordErr = "New Password is required";
	        }
	        else {
	         $npassword = test_input($_POST["npassword"]);
	

	          if (!strcmp($npassword,"Hello@#$%")) {
	             $npasswordErr = "Current and New Password can not be same.";
	           }
	

	           }
	

	           if (empty($_POST["rnpassword"])) {
	             $rnpasswordErr = "Retype New Password is required";
	           }
	           else {
	            $rnpassword = test_input($_POST["rnpassword"]);
	

	             if (strcmp($npassword,$rnpassword)) {
	                $rnpasswordErr = "Retype password and New Password need to be same.";
	              }
	

	              }
	     }
	

	

	   function test_input($data) {
	     $data = trim($data);
	     $data = stripslashes($data);
	     $data = htmlspecialchars($data);
	     return $data;
	   }
	

	     ?>
	

	    <h2>Lab Task 3</h2>
	    <fieldset>
	    <legend><h1>CHANGE PASSWORD</h1></legend>
	     <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	        Current Password: <input type="text" name="cpassword" value="<?php echo $cpassword;?>">
	        <span class="error">* <?php echo $cpasswordErr;?></span>
	        <br><br>
	        <span style="color:green">New Password:</span>
	        <input type="text" name="npassword" value="<?php echo $npassword;?>">
	        <span class="error">* <?php echo $npasswordErr;?></span>
	        <br><br>
	        <span style="color:Red">Retype New Password:</span>
	        <input type="text" name="rnpassword" value="<?php echo $rnpassword;?>">
	        <span class="error">* <?php echo $rnpasswordErr;?></span>
	        <br><br>
	        <input type="submit" name="submit" value="Submit">
	        <br><br>

	 
	</fieldset>



 <?php include 'footer.php';?>

</form>
</form>
</body>
</html>

