<?php
session_start();
include("../Controller/SessionController2.php");
require("../Controller/ProfileHandler.php");
require("../Controller/EditProfileHandler.php");
$user = fetchUser($_SESSION['uname']);
?>



<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Stylesheet2.css">
        <link rel="stylesheet" href="../Content/Object.css">
        <script type="text/javascript" src="../Scripts/EditProfileHandler.js" ></script>
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
                    <li><a href="EditProfile.php" class="active2">Edit Profile</a></li>
                    <li><a href="DeleteAccount.php">Delete Account</a></li>
                </ul>
            </nav>

            <panel>
                <form name="edit" method="post"  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    <table>
                        <tr>
                            <th>Username</th>
                            <td><?php echo $user['Username'] ?></td>
                        </tr>
                        <tr>
                            <th>Full Name</th>
                            <td><input class="input" name="fname" id="fname" type="text" value="<?php echo $user['Full_Name'] ?>" onkeyup="change(this)" >&nbsp<span id="fnameErr"><?php echo $fnameErr;?></span></td>
                        </tr>
                            <th>Email</th>
                            <td><input class="input" name="email" id="email" type="text" size="25" value="<?php echo $user['Email'] ?>" onkeyup="change(this)" >&nbsp<span id="emailErr"><?php echo $emailErr;?></span></td>
                        </tr>
                            <th>Phone</th>
                            <td><input class="input" name="phone" id="phone" type="text" value="<?php echo $user['Phone'] ?>" onkeyup="change(this)" >&nbsp<span id="phoneErr"><?php echo $phoneErr;?></span></td>
                        </tr>
                        <tr>
                            <th>Address</th>
                            <td><input class="input" name="address" id="address" type="text" size="40" value="<?php echo $user['Address'] ?>" onkeyup="change(this)" >&nbsp<span id="addressErr"><?php echo $addressErr;?></span></td>
                        </tr>
                    </table>

                    <input type="submit" value="Confirm Changes" name="EditUser" class="button" style="align-self:center">
                    <input type="reset" class="button">
                </form>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>