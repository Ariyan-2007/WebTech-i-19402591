<?php
session_start();
include("../Controller/SessionController2.php");
include("../Controller/ProfileHandler.php");
require("../Controller/DeleteAccountHandler.php");
$user = fetchUser($_SESSION['uname']);
?>



<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Object.css">
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Stylesheet2.css">
        <script>var spass = "<?= $_SESSION['pass']?>";</script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../Scripts/DeleteAccountHandler.js"></script>
        <title>BHMS</title>
    </head>

    <body>
        <header>
            <?php include("Header.php")?>
        </header>
    

        <section>
            <nav>
                <ul>
                    <li><a href="Dashboard.php">Dashboard</a></li>
                    <li><a href="Profile.php" class="active">Profile</a></li>
                    <li><a href='../Controller/LogoutHandler.php'>Log Out</a></li>
                    <hr>
                    <li><a href="EditProfile.php" >Edit Profile</a></li>
                    <li><a href="DeleteAccount.php" class="active2">Delete Account</a></li>
                </ul>
            </nav>

            <panel>
                <div class="center">
                <h1>Do You Really Want To Delete Your Account?</h1>
                <button type="button" class="button" onclick="trigger1()">Yes</button>
                <button type="button" class="button" onclick="trigger2()">No</button>
                <br><br>
                <form  name="confirm" id="confirm" class="form2" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" >
                <label for="pass" >Password</label><br>(<span id="passErr"><?php echo $passErr;?></span>)<br>
                <input type="password" id="pass" name="pass" value=""   onkeyup="change(this)" ><br>
                <label for="rpass">Re-Type Password</label><br>(<span id="rpassErr"><?php echo $rpassErr;?></span>)<br>
                <input type="password" id="rpass" name="rpass" value=""   onkeyup="change(this)" ><br>
                <input type="submit" value="Confirm" name="confirm"  class="button" >
                </div>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>