<!DOCTYPE HTML>  

<html>
    
<head>
</head>
    
<body>  


<?php
    
$name = $email = $gender = $dd = $mm = $yyyy = $dmy  = $bg =  "";
    
$degree[4] = "";
    
$nameErr = $emailErr =  $dmyErr = $degreeErr = $bgErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if (empty($_POST["name"]))
    {
        $nameErr = "Cannot Be Empty";
    }
    else if(str_word_count($_POST["name"])< 2)
    {
        $nameErr = "Must Contain Atleast 2 Words";
    }
    else if(ord($_POST["name"]) < 65 or ord($_POST["name"]) > 122)
    {
        $nameErr = "First Letter Must Be An Alphabetic Character";
        
    }
    else
    {
        $name = test_input($_POST["name"]);
    }
    
    if (empty($_POST["email"]))
    {
        $emailErr = "Cannot Be Empty";
    }
    else
    {
        $email = test_input($_POST["email"]);
    }
    
    if (empty($_POST["dd"]) or empty($_POST["mm"]) or empty($_POST["yyyy"]))
    {
        $dmyErr = "Cannot Be Empty";
    }
    else if ($_POST["dd"] < 1 or $_POST["dd"] > 31 or $_POST["mm"] < 1 or $_POST["mm"] > 12 or $_POST["yyyy"] < 1953 or $_POST["yyyy"] > 1998)
    {
        $dmyErr = "Please Enter A Valid Date";
    }
    else
    {
        $dd = test_input($_POST["dd"]);
        $mm = test_input($_POST["mm"]);
        $yyyy = test_input($_POST["yyyy"]);
        
        $dmy = "$dd / $mm / $yyyy";
    }

    
    if(empty($_POST['degree']))
    {
        $degreeErr = "Must Have Atleast Two Degrees";
    }
    
    else
    {
            $count = count($_POST['degree']);
            if($count < 2)
        {
            $degreeErr = "Must Have Atleast Two Degrees";

        }
        else 
        {
            $degree = test_input(implode(" & ",$_POST["degree"]));
        }
    }
    
    $gender = test_input($_POST["gender"]);
    
    
    if (empty($_POST["bg"]))
    {
        $bgErr = "Please Select A Blood Group";
    }
    else
    {
        $bg = test_input($_POST["bg"]);
    }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>

<h2>Assignment: PHP Validation</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
    
    Name: <input type="text" name="name"> <span style="color: red"><?php echo $nameErr?></span>
    <br><br> 
    E-mail: <input type="text" name="email"> <span style="color: red"><?php echo $emailErr?></span>
    <br><br>
    Date Of Birth: <input type="text" name="dd" style="width: 25px; text-align: center;" placeholder="dd"> /  <input type="text" name="mm" style="width: 25px;text-align: center;" placeholder="mm"> / <input type ="text" name="yyyy" style="width: 50px; text-align: center;" placeholder="yyyy" > <span style="color: red"><?php echo $dmyErr?></span>
    <br><br>
    
    Gender:
    <input type="radio" name="gender" value="Male" checked="checked">Male
    <input type="radio" name="gender" value="Female">Female
    <input type="radio" name="gender" value="Other">Other 
    <br><br>
    
    Degree:
    <input type="checkbox" name="degree[]" value="SSC">SSC
    <input type="checkbox" name="degree[]" value="HSC">HSC
    <input type="checkbox" name="degree[]" value="BSc">BSc
    <input type="checkbox" name="degree[]" value="MSc">MSc
    <span style="color: red"><?php echo $degreeErr?></span>
    <br> <br>
    
    Blood Group:
    <input list="bg" name="bg" style="width: 50px">
    <datalist id= "bg">
        <option value="A+">
        <option value="A-">
        <option value="B+">
        <option value="B-">
        <option value="O+">
        <option value="O-">
        <option value="AB+">
        <option value="AB-">
    </datalist><span style="color: red"><?php echo $bgErr?> </span> 
    <br><br>
    <input type="submit" name="submit" value="Submit">  
</form>

<?php
echo "<h2>Input Results:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $dmy;
echo "<br>";
echo $gender;
echo "<br>";
if(empty($_POST['degree']) or $count < 2)
echo implode($degree);
else
echo $degree;
echo "<br>";
echo $bg;
?>

</body>
</html>



