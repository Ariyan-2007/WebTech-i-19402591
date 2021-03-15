<!DOCTYPE HTML>
	<html>
	<head>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>
	<body>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>EDIT PROFILE</title>
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
	

	 $birthErr = $nameErr = $emailErr = $genderErr = $error= "";
	 $birthDate = $birthMonth = $birthYear = $name = $email = $gender = "";
	$flag=1;
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) {
	    $nameErr = "Name is required";
	    $flag=0;
	  } else {
	

	       $name = test_input($_POST["name"]);
	

	      if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) {
	         $nameErr = "Only letters and white space allowed";
	         $flag=0;
	       }
	    else  {
	             if(str_word_count($name)<2)
	          {
	           $nameErr = "Name must contains at least two words ";
	           $flag=0;
	

	          }
	      else {
	        $name = test_input($_POST["name"]);
	      }
	    }
	  }
	

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
	

	  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
	    $birthErr = "Date Month and Year is required";
	    $flag=0;
	  } else {
	

	    $birthDate=test_input($_POST["birthDate"]);
	    $birthMonth=test_input($_POST["birthMonth"]);
	    $birthYear=test_input($_POST["birthYear"]);
	

	    if(!is_numeric($birthDate))
	    {
	      $birthErr="Please input Numeric Date";
	      $flag=0;
	    }
	    else {
	

	      if(!is_numeric($birthMonth))
	      {
	          $birthErr="Please input Numeric month";
	          $flag=0;
	      }
	      else {
	        if(!is_numeric($birthYear))
	        {
	          $birthErr="Please input Numeric Year";
	          $flag=0;
	        }
	        else {
	          if($birthDate>31 || $birthDate<1)
	          {
	              $birthErr=" Input Date between 1 to 31";
	              $flag=0;
	          }
	          else {
	              if($birthMonth>12 || $birthMonth<1)
	              {
	                  $birthErr=" Input Month between 1 to 12";
	                  $flag=0;
	              }
	                  else {
	                    $birthErr=" ";
	                  }
	              }
	          }
	

	        }
	      }
	    
	
 if (empty($_POST["gender"])) {
	      $genderErr = "Gender is required";
	      $flag=0;
	    } else {
	      $gender = test_input($_POST["gender"]);
	    }
	    }
	

	    if (empty($_POST["username"])) {
	      $usernameErr = "User Name is required";
	      $flag=0;
	    }
	    else {
	     $username = test_input($_POST["username"]);
	

	      if (!preg_match("/^[a-zA-Z-. ]*$/",$username)) {
	         $usernameErr = "Only letters and white space allowed";
	         $flag=0;
	       }
	       else {
	         if(strlen($username)<2)
	         {
	            $usernameErr = "Name must contains at least two character ";
	            $flag=0;
	         }
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






<fieldset>
	<legend><h1>EDIT PROFILE</h1></legend>

	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  Name: <input type="text" name="name" value="<?php echo $name;?>">
	  <span class="error">* <?php echo $nameErr;?></span>
	  <br><br>
	   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
	  <span class="error">* <?php echo $emailErr;?></span>
	  <br><br>
   
	Gender:
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
	  <span class="error">* <?php echo $genderErr;?></span>
	
      <br><br>

      
	  Date of Birth:
	   <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate; ?>"> /
	  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth; ?>"> /
	  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear; ?>">
	  <span class="error">* <?php echo $birthErr;?></span>
	
<br><br>
	  <input type="submit" name="submit" value="Submit">

</fieldset>
 <?php include 'footer.php';?>
</form>
</body>
</html>

