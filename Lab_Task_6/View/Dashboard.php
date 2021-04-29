<?php
session_start();
include("../Controller/SessionController2.php");
?>



<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Object.css">
        <title>BHMS</title>
    </head>

    <body>
        <header>
            <?php include("Header.php")?>
        </header>

        <div id="pop" class="popup">
            <div class="popup-content">
                
                <?php include("PostAdvertisement.php") ?>
                
                
            </div>
        </div>

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
                <p style="float:right;"> Hey <span style="color:rgb(58, 58, 156);font-weight:bold;"><?php echo $_SESSION["uname"]; ?></span></p>
                <br style="clear:both;">
                <div style="text-align: center">
                <button type="button" class="button" style="margin-bottom: 5px;" id="postButton">Post Advertisement</button>
                <br>
                <button type="button" class="button" style="margin-bottom: 5px;">Manage Advertisement</button>
                <br>
                <button type="button" class="button" style="margin-bottom: 5px;">Pending Payments</button>
                </div>

                </table>
            </panel>
        </section>

        

        <footer>
            <?php include("Footer.php")?>
            <script src="../Scripts/DashboardHandler.js"></script>
        </footer>
        
    </body>