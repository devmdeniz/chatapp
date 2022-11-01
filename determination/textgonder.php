// INSERT INTO `chatmessages` (`id`, `username`, `text`) VALUES (NULL, 'iburamin', 'Merhaba'), (NULL, 'deniz', 'Selam ibrahim');
<?php
session_start();
include("../settings/connection.php");
$username = $_SESSION["username"];
$gonderilecektext = $_GET["gonderilecektext"];
$sql = "INSERT INTO `chatmessages` (`username`,`text`) VALUES ('$username','$gonderilecektext')";
$database = mysqli_query($conn, $sql);
header("Location:../index.php");
?>