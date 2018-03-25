<?php
session_start();

require("db.php");




        $_SESSION['username'] =null;
        $_SESSION['ROLE'] =null;

        header("Location: userlogin.php");


?>