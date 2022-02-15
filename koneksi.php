<?php
$server = "localhost";
$user = "root";
$pass = "Kopyor385";
$database = "produk";

$conn = mysqli_connect($server, $user, $pass, $database);
if(!$conn){
    echo 'gagal terhubung';
}

?>