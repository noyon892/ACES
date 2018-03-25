<?php
    define('HOST','localhost');
    define('USERNAME','root');
    define('PASSWORD','');
    define('DATABASE_NAME','aces');
    $conn = mysqli_connect(HOST,USERNAME,PASSWORD,DATABASE_NAME) or die(mysql_error());

   

?>