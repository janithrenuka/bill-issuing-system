<?php
    $dbserver = "localhost";
    $dbuser = "root";
    $dbname = "billingsystem";
    $dbpass = "";

    $connect = new mysqli($dbserver, $dbuser, $dbpass, $dbname);

    if($connect->connect_error){
        die("connection failes");
    }
?>