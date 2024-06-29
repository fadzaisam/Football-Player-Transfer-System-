<?php



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "player_transfer_system";

$conn = new mysqli($servername, $username, $password, $dbname);

if($conn) {
    echo "<script>alert('Connection Successfull');</script>";
    echo "<script>alert('Welcome');</script>";
} else {
    echo "<script>alert('Connection Failed');</script>";
}
?>