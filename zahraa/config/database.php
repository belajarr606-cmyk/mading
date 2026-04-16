<?php

$host = "localhost";
$user = "root";
$password = "";
$dbname = "mading_smkn1banjar";

$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}

mysqli_set_charset($conn, "utf8mb4");
?>