<!DOCTYPE html>
<html>
<head>
<script src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="Mid-client-_4-QMLHAwzVUVfC_"></script>
</head>

<body>
<button id="pay">Bayar</button>

<script>
document.getElementById('pay').onclick = async function(){
  const res = await fetch('checkout.php');
  const token = await res.text();

  window.snap.pay(token, {
    onSuccess: function(){
      alert("Berhasil");
    },
    onPending: function(){
      alert("Pending");
    },
    onError: function(){
      alert("Gagal");
    }
  });
};