<?php

if(!isset($_SESSION['uname']) )
{
    echo '<script>
            alert("Please Login First!");
            window.location.href = "Home.php";
          </script>';
}



?>