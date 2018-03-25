<?php
session_start();

require("db.php");




$username=$_REQUEST["username"];
$pass=$_REQUEST["password"];


//var_dump($username,$pass);

$sql = "select * from user where USERNAME = '$username' and PASSWORD = '$pass'";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['username'] = $row["username"];
        header("Location: userprofile.php");

    }
} else {
     header("Location: userlogin.php");
}
$conn->close();

?>