<?php
$host = "localhost";
$user = "root";
$pass ="";

$conn = mysqli_connect($host, $user, $pass);

if (!$conn) {
    die("koneksi gagal:". mysqli_connect_eror());
}