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
                    <li><a href="About.php" class="active">About Project</a></li>
                    <li><a href="Contact.php">Contact Us</a></li>
                    <hr>
                </ul>
            </nav>

            <panel>
                <h3>About</h3>
                <p>In Bangladesh, students or bachelors who move out from their homes in order to go study in a college/university or in search of work outside of their district , most of the times have to look for an apartment to rent as there is always scarcity of accommodation in existing dorms or hostels. They face a major problem finding a place to live in, as most of the students/bachelors are entirely new to the city and are often clueless on where to start finding.</p>
                <p>This problem is important because every year a huge amount of students/bachelors of various economic class move just to Dhaka in order to get access to higher education or better work. Finding a place to live in a completely new city can be hectic and costly too considering transportation and temporary accommodation costs. That’s why we thought we should consider a solution to this problem</p>
                <p>We came up with a web based solution that focuses on a user friendly Web application which will bridge a connection between the students/bachelors and the renters so that renters can post advertisements of the apartments they are willing to give rent and then the bachelors can find their suitable living choice and then through mobile banking, complete booking and confirm rent. This way the problem can easily be solved and both sides will be benefited from this solution. Also this can be a business success as huge amount of students and bachelors move into new cities every year.</p>
            </panel>
        </section>

        <footer>
            <?php include("Footer.php")?>
        </footer>
    </body>