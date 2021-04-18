<?php

$email = $_POST['email'];
$password = $_POST['passoword'];

//Database Conenction

$conn = new mysqli('localhost', 'root', '', 'ms_database');

    if($conn->connect_error) {
        die('Connection failed: ' . $conn->connect_error);
    } else {
        $stmt = $conn->prepare("INSERT INTO users (email, password) VALUES ($email', '$password')");
        $stmt->execute();
        $stmt->close();
        $conn->close();

        header("Location: ../index.php");
    }

?>