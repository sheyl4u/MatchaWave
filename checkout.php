<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';
<<<<<<< HEAD
require_once 'db.php';

// Midtrans Config
if (class_exists('Midtrans\Config')) {
    Midtrans\Config::$serverKey = 'Mid-server-CrTdnigRuLCIl34SLTt9CEVO';
    Midtrans\Config::$isProduction = false;
}
=======
require_once __DIR__ . '/db.php';

// Midtrans Config
\Midtrans\Config::$serverKey = 'Mid-server-CrTdnigRuLCIl34SLTt9CEVO';
\Midtrans\Config::$isProduction = false;
>>>>>>> 8d967c78673fb4b6c69efdbc6b7fb77f702fdbfc

$order_id = "ORDER-" . time();
$name = "Budi";
$email = "budi@email.com";
$amount = 10000;

<<<<<<< HEAD
// Simpan ke DB (status pending)
$conn->query("INSERT INTO orders (order_id,name,email,amount,status)
VALUES ('$order_id','$name','$email','$amount','pending')");

// Param Midtrans
=======
// Simpan ke DB
$conn->query("INSERT INTO orders (order_id,name,email,amount,status)
VALUES ('$order_id','$name','$email','$amount','pending')");

// Parameter Midtrans
>>>>>>> 8d967c78673fb4b6c69efdbc6b7fb77f702fdbfc
$params = [
  'transaction_details' => [
    'order_id' => $order_id,
    'gross_amount' => $amount,
  ],
  'customer_details' => [
    'first_name' => $name,
    'email' => $email,
  ],
];

$snapToken = \Midtrans\Snap::getSnapToken($params);
<<<<<<< HEAD
=======

>>>>>>> 8d967c78673fb4b6c69efdbc6b7fb77f702fdbfc
echo $snapToken;