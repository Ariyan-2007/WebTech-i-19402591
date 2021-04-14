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
    </head>

    <body>
        <header>
            <?php include("Header.php")?>
        </header>
        
        

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
                <h3>Contact</h3>
                <p>Email: ariyanjahangireng@gmail.com</p>
                <p>Phone: +8801817274124</p>
                <p>Instagram: @ariyan_t_survivor</p>
                </form>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>