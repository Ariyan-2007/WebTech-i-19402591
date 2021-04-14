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
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
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
                    <li><a href="Profile.php">Profile</a></li>
                    <li><a href='../Controller/LogoutHandler.php'>Log Out</a></li>
                    <hr>
                </ul>
            </nav>

            <panel>
                <table>
                    <tr>
                        <th>Username</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Address</th>
                    </tr>
                    <tr>
                        <td><?php echo $user['Username'] ?></td>
                        <td><?php echo $user['Full_Name'] ?></td>
                        <td><?php echo $user['Email'] ?></td>
                        <td><?php echo $user['Phone'] ?></td>
                        <td><?php echo $user['Address'] ?></td>
                    </tr>

                </table>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>