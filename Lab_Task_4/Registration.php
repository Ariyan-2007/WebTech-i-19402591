<!DOCTYPE HTML>
	<html>
	<head>
	<style>
	.error {color: #FF0000;}
	</style>
	</head>
	<body>

<form style="border:3px; border-style:solid; border-color:gray; padding: 1em;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
<title>REGISTRATION</title>
<h1><center>The XCompany</center></h1>

<div class="menu">
<?php include 'menu.php';?>
</div>


	

	<?php
	

	 $birthErr = $nameErr = $emailErr = $genderErr = $websiteErr =$error= "";
	 $birthDate = $birthMonth = $birthYear = $name = $email = $gender = $comment = $website = "";
	 $username=$password="";
	 $usernameErr=$passwordErr="";
	$confirmpassword="";
	$confirmpasswordErr="";
	$flag=1;
	

	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  if (empty($_POST["name"])) 
      {
	    $nameErr = "Name is required";
	    $flag=0;
	  } 
        else 
        {
            $name = test_input($_POST["name"]); 
            if (!preg_match("/^[a-zA-Z-. ]*$/",$name)) 
            {
	         $nameErr = "Only letters and white space allowed";
	         $flag=0;
            }
	       else  
            {
             if(str_word_count($name)<2)
	          {
	           $nameErr = "Name must contains at least two words ";
	           $flag=0;
	

	          }
	      else 
          {
	        $name = test_input($_POST["name"]);
	      }
	       }
	  }
	

	  if (empty($_POST["email"])) 
      {
	    $emailErr = "Email is required";
	    $flag=0;
	  } 
        else 
        {
            $email = test_input($_POST["email"]);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
            {
              $emailErr = "Invalid email format";
              $flag=0;
            }
	  }
	

	  if (empty($_POST["birthDate"]) || empty($_POST["birthMonth"]) || empty($_POST["birthYear"])) {
	    $birthErr = "Date Month and Year is required";
	    $flag=0;
	  } 
        else {
	

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
	

	    if(empty($_POST["password"]))
	    {
	      $passwordErr = "Password is required";
	      $flag=0;
	    }
	    else {
	      $password=test_input($_POST["password"]);
	      if(strlen($password)<8)
	      {
	        $passwordErr="Password must not be less than eight (8) characters";
	        $flag=0;
	      }
	      
	    }
	

	    if(empty($_POST["confirmpassword"]))
	    {
	      $confirmpasswordErr = "Confirm Password is required";
	      $flag=0;
	    }
	    else {
	      if(empty($_POST["password"]))
	      {
	        $confirmpasswordErr = "Password is required";
	        $flag=0;
	      }
	      else {
	        $confirmpassword=test_input($_POST["confirmpassword"]);
	

	        if(strcmp($password,$confirmpassword))
	        {
	          $confirmpasswordErr="Password and confirm password have to be same";
	          $flag=0;
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
	}
	   
	

	

	function test_input($data) {
	  $data = trim($data);
	  $data = stripslashes($data);
	  $data = htmlspecialchars($data);
	  return $data;
	}
	?>
	

	
	    
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
	  <fieldset>
	    <legend><h1>REGISTRATION</h1></legend>
        Name: <input type="text" name="name" value="<?php echo $name;?>">
        
	  <span class="error">* <?php echo $nameErr;?></span>
	  <br><br>
	   E-mail: <input type="text" name="email" value="<?php echo $email;?>">
	  <span class="error">* <?php echo $emailErr;?></span>
	  <br><br>
	  User Name: <input type="text" name="username" value="<?php echo $username;?>">
	  <span class="error">* <?php echo $usernameErr;?></span>
	  <br><br>
	  Password: <input type="password" name="password" value="<?php echo $password;?>">
	  <span class="error">* <?php echo $passwordErr;?></span>
	  <br><br>
	

	  Comfirm Password: <input type="password" name="confirmpassword" value="<?php echo $confirmpassword;?>">
	  <span class="error">* <?php echo $confirmpasswordErr;?></span>
	  <br><br>
	
    <fieldset>
	<legend>Gender</legend>
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
	  <input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
	  <span class="error">* <?php echo $genderErr;?></span>
	</fieldset>


      <fieldset>
	  <legend>Date of Birth</legend>
	   <input type="text" size="1" placeholder="dd" name="birthDate" value="<?php echo $birthDate; ?>"> /
	  <input type="text" size="1" placeholder="mm" name="birthMonth" value="<?php echo $birthMonth; ?>"> /
	  <input type="text" size="2" placeholder="yyyy" name="birthYear" value="<?php echo $birthYear; ?>">
	  <span class="error">* <?php echo $birthErr;?></span>
	</fieldset>
	  
	
        
	<br>
	  <input type="submit" name="submit" value="Submit">
	  <input type="reset" name="reset" value="Reset">
	  <br>
	  </fieldset>

	  <?php include 'footer.php';?>
	</form>
        </form>




	</body>
	</html>