<?php

$conn = mysqli_connect("localhost", "root", "", "mwc_login");

if (!$conn) {
    die("Koneksi gagal");
}

$username = trim($_POST['username']);
$password = trim($_POST['password']);

$sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";

$query = mysqli_query($conn, $sql);

$data = mysqli_fetch_assoc($query);

if($data){

    header("Location: index.html");
    exit();

}else{

    echo "Login gagal";

}

?>