<?php

$servername = "localhost";
$database = "chatapp";
$username = "root";
$password = "";



// $conn = mysqli_connect($servername, $username, $password, $database);



$conn = new mysqli($servername, $username, $password, $database);

$conn->set_charset("utf8");



?>