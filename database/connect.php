<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database = 'webraucu';

$conn = new mysqli($server, $user, $pass, $database);
if($conn->connect_error) {
    die("kết nối thất bại" . $conn->connect_error);
} else {
    mysqli_query($conn,"SET NAME 'utf8'");
    echo 'nhung';
}
?>