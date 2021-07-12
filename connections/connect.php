<?php

$servername = "localhost";
$username = "root";
$password = "root";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("connection failed : " . mysqli_connect_error());
}else{
    echo "Connected Succesfully";
}

Hello
?>