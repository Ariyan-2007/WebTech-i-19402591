<?php
session_start();
include("../Controller/SessionController1.php");
require("../Controller/RegistrationHandler.php");
?>


<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Object.css">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="../Scripts/RegistrationHandler.js" ></script>
        
        <title>BHMS</title>
    </head>

    <body>
        <header>
            <?php include("Header.php")?>
        </header>
        

        <section>
            <nav>
                <ul>
                    <li><a href="Home.php">Login</a></li>
                    <li><a href="Registration.php" class="active">Registration</a></li>
                    <li><a href="About.php">About Project</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
                    <hr>
                </ul>
            </nav>

            <panel>
                <h3>Registration</h3>
                <form class="form" style="float:left;" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="uname">Username:</label><span>*</span>
                <input type="text" id="uname" name="uname" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>" onkeyup="change(this)" >
                <br><br>
                <label for="fname">Full Name:</label><span>*</span>
                <input type="text" id="fname" name="fname" value="<?php if (isset($_POST['fname'])) echo $_POST['fname']; ?>" onkeyup="change(this)" >
                <br><br>
                <label for="email">Email:</label><span>*</span>
                <input type="text" id="email" name="email" value="<?php if (isset($_POST['email'])) echo $_POST['email']; ?>"  onkeyup="change(this)">
                <br><br>
                <label for="phone">Phone:</label><span>*</span>
                <input type="text" id="phone" name="phone" value="<?php if (isset($_POST['phone'])) echo $_POST['phone']; ?>"  onkeyup="change(this)" >
                <br><br>
                <label for="address">Address:</label><span>*</span>
                <input type="text" id="address" name="address" value="<?php if (isset($_POST['address'])) echo $_POST['address']; ?>"  onkeyup="change(this)" >
                <br><br>
                <label for="pass">Password:</label><span>*</span>
                <input type="password" id="pass" name="pass" value=""  onkeyup="change(this)" >
                <br><br>
                <label for="rpass">Re-Type Password:</label><span>*</span>
                <input type="password" id="rpass" name="rpass" value=""   onkeyup="change(this)" >
                <br><br>
                <input type="reset" class="button">
                <input type="submit" value="Submit" name="CreateUser" class="button">
                </form>
                <form style="margin-left:33.5%">
                <span id="unameErr"><?php echo $unameErr;?></span><br>
                <br><span id="fnameErr"><?php echo $fnameErr;?></span><br>
                <br><span id="emailErr"><?php echo $emailErr;?></span><br>
                <br><span id="phoneErr"><?php echo $phoneErr;?></span><br>
                <br><span id="addressErr"><?php echo $addressErr;?></span><br>
                <br><span id="passErr"><?php echo $passErr;?></span><br>
                <br><span id="rpassErr"><?php echo $rpassErr;?></span><br>
                </form>
                
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>

        
    </body>