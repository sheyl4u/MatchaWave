<?php

$conn = new mysqli("localhost", "root", "", "matchawave");

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}