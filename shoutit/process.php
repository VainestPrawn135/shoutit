<?php
    include 'database.php';

    if(isset($_POST['submit'])){
        $user = $_POST['user'];
        $message = $_POST['message'];

        date_default_timezone_set('America/Mexico_City');
        $time = date('h:i:s', time());

        if(!isset($user) || $user == '' || !isset($message) || $message == '') {
            $error = "Please fill in your name and a message";
            header("Location: index.php?error=".urlencode($error));
            exit();
        } else {
            $insert = "INSERT INTO shouts (user, message, time) VALUES ('$user', '$message', '$time')";

            if(!$con->query($insert)) {
                die("Error: ".mysqli_error($con));
            } else {
                header("Location: index.php");
                exit();
            }
        }
    }
?>