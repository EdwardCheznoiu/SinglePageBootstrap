<?php
include "db_connection.php";
$name = $_POST["name"];
$email = $_POST["emailAddress"];
$message = $_POST["message"];

if(!$conn){
    header("Location: ../index.php?message=Can't connect to db!");
}

if(empty($name) || empty($message)){
    header("Location: ../index.php?message=All fields are required!");
}
else{
    $sql = "INSERT INTO contact (message_name, email, message_msg) VALUES (?, ?, ?)";
    $stmt = mysqli_stmt_init($conn);
    if(!mysqli_stmt_prepare($stmt, $sql)){
        header("Location: ../index.php?message=Something went wrong with the message registration!");
    }
    else{
        mysqli_stmt_bind_param($stmt, "sss", $name, $email, $message);
        mysqli_stmt_execute($stmt);
        header("Location: ../index.php?message=Thank you! We will get to you as soon as possible!");
    }
}