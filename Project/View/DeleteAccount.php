<?php
session_start();
include("../Controller/SessionController2.php");
include("../Controller/ProfileHandler.php");
$user = fetchUser($_SESSION['uname']);
?>



<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Object.css">
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Stylesheet2.css">
        <script src="../Scripts/DeleteAccountHandler.js"></script>
        <title>BHMS</title>
    </head>

    <body>
        <header>
            <?php include("Header.php")?>
            <?php include("../Controller/SessionController2.php")?>
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
                <button type=button class="button" onclick="trigger1()">Yes</button>
                <button type=button class="button" onclick="trigger2()">No</button>
                <br><br>
                <form  name="confirm" id="confirm" class="form2" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <label for="pass" >Password:</label>
                <input type="password" id="pass" name="pass" value="" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)"><br><br>
                <label for="rpass">Re-Type Password:</label>
                <input type="password" id="rpass" name="rpass" value="" onfocus="change(this)"  onkeyup="change(this)" onblur="revert(this)"><br><br>
                <input type="submit" value="Confirm" name="confirm" class="button">
                </form>
                </div>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>