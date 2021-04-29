<?php

session_start();


if(isset($_SESSION['uname']) )
{
    session_unset();
    session_destroy();

    echo '<script>
        alert("Log Out Succesful");
        window.location.href = "../View/Home.php";    
       </script>';
}



?>