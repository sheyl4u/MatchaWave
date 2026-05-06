<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

echo "FILE DB TERBACA<br>";

$conn = new mysqli("localhost", "root", "", "matchawave");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

echo "hello";