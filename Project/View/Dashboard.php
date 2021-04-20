<?php
session_start();
include("../Controller/SessionController2.php");
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
        </header>
    

        <section>
            <nav>
                <ul>
                    <li><a href="Dashboard.php" class="active">Dashboard</a></li>
                    <li><a href="Profile.php">Profile</a></li>
                    <li><a href='../Controller/LogoutHandler.php'>Log Out</a></li>
                    <hr>
                </ul>
            </nav>

            <panel>
                <p style="float:right;"> Hey <?php echo $_SESSION["uname"]; ?></p>
                <br style="clear:both;">
                

                </table>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>