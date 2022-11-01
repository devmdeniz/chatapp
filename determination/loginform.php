<?php
include("../settings/connection.php");
session_start();
$username = $_POST["username"];
$password = $_POST["password"];
$passcodeen = hash('sha256', $password);

echo $passcodeen;
$determinator = mysqli_query($conn, "SELECT * FROM users WHERE `username`='" . $username . "' AND `password`='" . $passcodeen . "' ");

$result = $determinator->fetch_array();
$number = mysqli_num_rows($determinator);

if ($number == 1) {
    $_SESSION["username"] = $result["username"];
    $_SESSION["id"] = $result["id"];
    header("Location: ../index.php");
    // echo "basarili";
} else {
    // echo "basarilisiz" . $passcodeen;
    session_destroy();
}


?>