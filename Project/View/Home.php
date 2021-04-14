<?php
session_start();
include("../Controller/SessionController1.php");
?>


<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <title>BHMS</title>
        <script src="../Scripts/LoginHandler.js"></script>
    </head>

    <body>
        <header>
            <?php include("Header.php")?>
        </header>
        
        <?php require("../Controller/LoginHandler.php"); ?>

        <section>
            <nav>
                <ul>
                    <li><a href="Home.php">Login</a></li>
                    <li><a href="Registration.php">Registration</a></li>
                    <li><a href="About.php">About Project</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
                    <hr>
                </ul>
            </nav>

            <panel>
                <h3>Login</h3>
                <form class="form" name="login" style="float:left;" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="uname">Username:</label>
                <input type="text" id="uname" name="uname" value="<?php if (isset($_POST['uname'])) echo $_POST['uname']; ?>" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)" ><br><br>
                <label for="pass">Password:</label>
                <input type="password" id="pass" name="pass" value="" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)"><br><br>
                <input type="submit" value="Submit" name="Login">
                </form>
                <form style="margin-left:33.5%">
                <span id="unameErr"><?php echo $unameErr;?></span><br>
                <br><span id="passErr"><?php echo $passErr;?></span><br>
                </form>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>