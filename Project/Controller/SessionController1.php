<?php

if(isset($_SESSION['uname']))
{
    echo '<script>
            window.location.href = "Dashboard.php";
        </script>';
}

?>