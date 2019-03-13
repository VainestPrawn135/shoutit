<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "shoutit";

    $con = new mysqli($servername, $username, $password, $dbname);

    if($con->connect_error){
        die("Failed to connect to MySQL: ".mysqli_error($con));
    }
?>