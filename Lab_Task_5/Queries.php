<?php 

require_once 'db_connect.php';


function CreateUser($data){
	$conn = db_conn();
    $selectQuery = "INSERT into flatowner (Username, Full_Name, Email, Phone, Address, Password)
VALUES (:uname, :fname, :email, :phone, :address, :pass)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	':uname' => $data['uname'],
        	':fname' => $data['fname'],
        	':email' => $data['email'],
        	':phone' => $data['phone'],
        	':address' => $data['address'],
            ':pass' => $data['pass']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function SearchUser($uname){
    $conn = db_conn();
    $selectQuery = "SELECT Username FROM `flatowner` WHERE Username = '$uname'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $rows;
}

function VerifyPassword($uname){
    $conn = db_conn();
    $selectQuery = "SELECT * FROM `flatowner` WHERE Username = '$uname'";

    
    try{
        $stmt = $conn->query($selectQuery);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $rows = $stmt->fetchAll(PDO::FETCH_COLUMN, 5);
    return $rows[0];
}

function showUser($uname){
	$conn = db_conn();
	$selectQuery = "SELECT * FROM `flatowner` WHERE Username = '$uname'";
    try {
        $stmt = $conn->query($selectQuery);
    } catch (PDOException $e) {
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function editUser($uname, $data){
    $conn = db_conn();
    $selectQuery = "UPDATE `flatowner` set Full_Name = ?, Email = ?, Phone = ?, Address = ? where Username = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
        	$data['fname'], $data['email'], $data['phone'], $data['address'], $uname
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}

function deleteUser($uname){
	$conn = db_conn();
    $selectQuery = "DELETE FROM `flatowner` WHERE `Username` = ?";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$uname]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $conn = null;

    return true;
}