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
        echo "id: " . $row["id"]. " - Name: " . $row["username"]. " " . $row["password"]. "<br>";
    }
} else {
    echo "login failed";
}
$conn->close();

?>