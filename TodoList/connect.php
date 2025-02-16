<?php 
    $conn = mysqli_connect("localhost","root", "", "todolist");
    if ($conn->connect_error) {
        die("Connection error: " . $conn->connect_error);
    }
?>