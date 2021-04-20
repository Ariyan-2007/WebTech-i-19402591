<?php
$mysqli = new mysqli("localhost", "root", "", "BHMS");
if($mysqli->connect_error) {
  exit('Could not connect');
}

$sql = "SELECT username, email, phone, linkedin FROM `admin` WHERE username = ?";

$stmt = $mysqli->prepare($sql);
$stmt->bind_param("s", $_GET['q']);
$stmt->execute();
$stmt->store_result();
$stmt->bind_result($uname, $email, $phone, $linkedin);
$stmt->fetch();
$stmt->close();

echo "<table>";
echo "<tr>";
echo "<th>Name</th>";
echo "<td>" . $uname . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Email</th>";
echo "<td>" . $email . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Phone</th>";
echo "<td>" . $phone . "</td>";
echo "</tr>";
echo "<tr>";
echo "<th>Linkedin</th>";
echo "<td><a href='" . $linkedin . "'style='text-decoration: none; color: black; font-weight: 600;' target='_blank'>Profile</td>";
echo "</tr>";
echo "</table>";
?>