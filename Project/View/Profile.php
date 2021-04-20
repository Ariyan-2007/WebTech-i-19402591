<?php
session_start();
include("../Controller/SessionController2.php");
require("../Controller/ProfileHandler.php");
$user = fetchUser($_SESSION['uname']);
?>



<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Stylesheet2.css">
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
                    <li><a href="EditProfile.php">Edit Profile</a></li>
                    <li><a href="DeleteAccount.php">Delete Account</a></li>
                </ul>
            </nav>

            <panel>
                <table>
                    <tr>
                        <th>Username</th>
                        <td><?php echo $user['Username'] ?></td>
                    </tr>
                    <tr>
                        <th>Full Name</th>
                        <td><?php echo $user['Full_Name'] ?></td>
                    </tr>
                        <th>Email</th>
                        <td><?php echo $user['Email'] ?></td>
                    </tr>
                        <th>Phone</th>
                        <td><?php echo $user['Phone'] ?></td>
                    </tr>
                    <tr>
                        <th>Address</th>
                        <td><?php echo $user['Address'] ?></td>
                    </tr>
                </table>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>