<!DOCTYPE HTML>  
<html>
    <head>
        <style> .err {color: #FF0000;} </style>
    </head>
    <body>  

        <?php
            $cpassErr = $npassErr = $nnpassErr = "";
            $cpass = $npass = $nnpass = "";
            if ($_SERVER["REQUEST_METHOD"] == "POST") 
            {
              if (empty($_POST["cpass"])) 
              {
                $cpassErr = "Current Password is required";
              } 
                else 
                {
                    $cpass = test_input($_POST["cpass"]);
                }

              if (empty($_POST["npass"])) 
              {
                $npassErr = "Enter The New Password";
              } 
                else 
                {
                    $npass = test_input($_POST["npass"]);
                    if (strlen($npass)<8) 
                    {
                        $npassErr = "Password must be 8 charecters";

                    }
                    else if (!preg_match("/[@,#,$,%]/",$npass)) 
                    {
                        $npassErr = "Password must contain at least one of the special characters (@, #, $,%)";

                    }
                    else if (strcmp($cpass, $npass)==0) 
                    {
                        $npassErr = "New Password should not be same as the Current Password";

                    }
                }

              if (empty($_POST["nnpass"])) 
              {
                $nnpassErr = "Retype The Current Password";
              } 
                else 
                {
                    $nnpass = test_input($_POST["nnpass"]);
                    if (!strcmp($npass, $nnpass)==0) 
                    {
                        $nnpassErr = "New Password must match with the Retyped Password";

                    }
                }

            }

            function test_input($data) 
            {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
            }
        ?>


        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
          <fieldset>
        <legend><B>CHANGE PASSWORD</B></legend>  
          Current Password: <input type="Password" name="cpass">
          <span class="err"> <?php echo $cpassErr;?></span>
          <br><br>
          <span style="color:green"><b>New Password: </b></span><input type="Password" name="npass">
          <span class="err"> <?php echo $npassErr;?></span>
          <br><br>
          <span style="color:red"><b>Retype New Password: </b></span><input type="Password" name="nnpass">
          <span class="err"> <?php echo $nnpassErr;?></span>
          <br><hr>
          <input type="submit" name="submit" value="Submit">
        </fieldset>
        </form>
        
        <p><b>Your Result:</b></p>
        <?php
        echo $cpass;
        echo "<br>";
        echo $npass;
        echo "<br>";
        echo $nnpass;
        echo "<br>";
        ?>
    </body>
</html>