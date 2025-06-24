<?php
$hostname = "localhost";
$hostusername = "root";
$password = "";
$data_base = "laundry_1";
$config = mysqli_connect($hostname, $hostusername, $password, $data_base);
if (!$config) {
    echo "koneksi gagal";
}
