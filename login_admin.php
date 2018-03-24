<?php
session_start();

require("db.php");




$username=$_REQUEST["username"];
$pass=$_REQUEST["password"];




$sql = "select * from admin where USERNAME = '$username' and PASSWORD = '$pass'";



$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $_SESSION['ROLE'] = "admin";
        header("Location: addmember.php");

    }
} else {
    echo "login failed";
}
$conn->close();

?>