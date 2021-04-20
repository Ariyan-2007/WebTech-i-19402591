<?php
session_start();
include("../Controller/SessionController1.php");
?>

<!DOCTYPE html>

<html>
    <head>
        <?php include("fonts.php")?>
        <link rel="stylesheet" href="../Content/Stylesheet1.css">
        <link rel="stylesheet" href="../Content/Stylesheet2.css">
        <title>BHMS</title>
        <script src="../Scripts/ContactHandler.js"></script>
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
                    <li><a href="Contact.php" class="active">Contact Us</a></li>
                    <hr>
                </ul>
            </nav>

            <panel>
                <h3>Contact</h3>
                <form action=""> 
                <select name="Owners" onchange="showOwner(this.value)">
                    <option value="">Select an Owner:</option>
                    <option value="Ariyan">Ariyan Jahangir</option>
                    <option value="Sabiha">Sabiha Hazera Natasha</option>
                    <option value="Mishal">Mishal Hasan</option>
                    <option value="Turin">Fahmida Turin</option>
                </select>
                </form>
                <br>
                <div id="instruction">Select an owner to show their contact details..</div>
                
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>