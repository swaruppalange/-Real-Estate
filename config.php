<?php

$server = "localhost";
$user  = "root";
$pass = "";
$database = "realestate";

$conn = mysqli_connect($server, $user, $pass, $database);

if(!$conn) {
    die("<script> alert('connection faild');</script>");
}

?>