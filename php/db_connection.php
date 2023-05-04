<?php 

$HOST = "localhost";
$DB_NAME = "tw_db";
$USERNAME = "root";
$PASSWORD = "";

$conn = mysqli_connect($HOST, $USERNAME, $PASSWORD, $DB_NAME);


if(!$conn){
    header("Location: ../index.php?message=Can't connect to db!");  
}