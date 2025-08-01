<?php
$server = 'localhost';
$user = 'root';
$pass = '';
$database= 'webraucu';
$conn = new mysqli($server, $user, $pass, $database);
if($conn->connect_error){
    die("Ket noi that bai" . $conn->connect_error);
}else{
    mysqli_query($conn,"SET NAMES 'utf8'");
    echo('Ket noi thanh cong');
}
?>