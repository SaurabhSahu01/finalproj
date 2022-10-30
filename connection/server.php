<?php 
    $server = "localhost";
    $username = "root";
    $password = "";
    $database = "car_rental";

    $conn = mysqli_connect($server, $username, $password, $database);
    if(!$conn){
        die("Failed to connect to the database ".mysqli_connect_error());
    }
?>