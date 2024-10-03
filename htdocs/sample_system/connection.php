<?php

    $server = "127.0.0.1";
    $username = "mariadb";
    $password = "mariadb";
    $dbname = "mariadb";

    $conn = mysqli_connect($server, $username, $password, $dbname);

    //check the connection if successfull
    if (!$conn){
        die ("connection failed: ". mysqli_connect_error());
    }else{
        echo "database connected successfully!";
    }


?>