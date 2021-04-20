<?php 

require_once '../Model/Queries.php';
$pass = $rpass = "";
$flag = 1;
$passErr = $rpassErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{

    if(empty($_POST["pass"])) 
    {
        $passErr = "Password is required";
        $pass = "";
        $flag = 0;
    }
    else if($_POST["pass"]!=$_SESSION["pass"])
    {
        $passErr = "Wrong Password!";
        $pass = "";
        $flag = 0; 
    }
    else
    {
        $pass = test_input($_POST["pass"]);
        if(empty($_POST["rpass"]))
        {
            $rpassErr = "Re-type the Password";
            $rpass = "";
            $flag = 0;
        }
        else if($_POST["rpass"]!=$pass)
        {
            $rpassErr = "Password Doesn't Match!";
            $rpass = "";
            $flag = 0;
        }
        else
        {
            $rpass = test_input($_POST["rpass"]);
        }
    }

}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if(isset($_POST['confirm']) && $flag==1)
{
    if(deleteUser($_SESSION['uname']))
    {
        if(file_exists('../Content/Register.json'))
        {
            $current_data = file_get_contents('../Content/Register.json');
            $array_data = json_decode($current_data, true);

            foreach($array_data as $array_data)
            {
                if($array_data["uname"] == $_SESSION["uname"])
                {
                    
                }
                else
                {
                    $final_data[] = $array_data;
                }
            }

            $current_data = json_encode($final_data);
            if(file_put_contents('../Content/Register.json', $current_data))
            {
                session_unset();
                session_destroy();

                echo '<script>
                        alert("Account Deletion Succesful!");
                        window.location.href = "../View/Home.php";    
                      </script>';
            }

        }
        
    }

}


?>