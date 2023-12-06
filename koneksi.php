<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "toko_online";

$conn = mysqli_connect($hostname, $username, $password, $database);

if ($conn) {
    echo "";
} else {
    die("Koneksi ke database gagal") . mysqli_connect_error();
}
