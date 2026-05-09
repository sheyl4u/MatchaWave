<?php

$conn = mysqli_connect("localhost", "root", "", "matchawave");

$username = $_POST['username'];
$password = $_POST['password'];

$query = mysqli_query($conn,
"SELECT * FROM users 
WHERE username='$username' 
AND password='$password'");

$cek = mysqli_num_rows($query);

if($cek > 0){

    // balik ke website utama
    header("Location: index.html");

}else{

    echo "Login gagal";

}

?>