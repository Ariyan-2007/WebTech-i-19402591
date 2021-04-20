<?php 

require_once '../Model/Queries.php';

$fname = $email = $phone = $address = "";
$flag = 1;
$fnameErr = $emailErr = $phoneErr = $addressErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST")
{
    
    if (empty($_POST["fname"]))
    {
        $fnameErr = "Name cannot be empty";
        $fname = "";
        $flag = 0;
    }
    else if(str_word_count($_POST["fname"])< 2)
    {
        $fnameErr = "Name must contain atleast 2 words";
        $fname = "";
        $flag = 0;
    }
    else if (!preg_match("/^[a-zA-Z-.' ]*$/",$_POST["fname"])) 
    {
        $fnameErr = "Only letters white space, period & dash allowed";
        $fname = "";
        $flag = 0;
    }
    else
    {
        $fname = test_input($_POST["fname"]);
    }

    if (empty($_POST["email"])) 
    {
        $emailErr = "Email is required";
        $email = "";
        $flag = 0;
    }       
    else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) 
    {
        $emailErr = "Invalid email format";
        $email = "";
        $flag = 0;
    }
    else
    {
        $email = test_input($_POST["email"]);
    }

    if(empty($_POST["phone"]))
    {
        $phoneErr ="Cannot be empty";
        $phone = "";
        $flag = 0;
    }
    else if(!preg_match("/^[0-9]{11}+$/", $_POST["phone"]))
    {
        $phoneErr ="Invalid Phone Number";
        $phone = "";
        $flag = 0;
    }
    else
    {
        $phone = test_input($_POST["phone"]);
    }

    if(empty($_POST["address"]))
    {
        $addressErr = "Address cannot be empty";
        $address = "";
        $flag = 0;
    }
    else if(!preg_match("/[A-Za-z0-9\-\\,.]+/", $_POST["address"]))
    {
        $addressErr = "Invalid Address";
        $address = "";
        $flag = 0;
    }
    else
    {
        $address = test_input($_POST["address"]);
    }

    

}

function test_input($data) 
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if (isset($_POST['EditUser']) && $flag==1) {
	
	$data['fname'] = $fname;
	$data['email'] = $email;
	$data['phone'] = $phone;
    $data['address'] = $address;

    if (editUser($_SESSION['uname'], $data))
    {
        echo '<script> 
                alert("Profile Successfully Updated");
                window.location.href = "Profile.php";
              </script>';

    }

    else
    {
        echo 'Access Denied';
    }
}



?>