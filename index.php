<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>MatchaWave Payment</title>

<script src="https://app.sandbox.midtrans.com/snap/snap.js"
data-client-key="Mid-client-_4-QMLHAwzVUVfC_"></script>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:linear-gradient(to right, #d8f3dc, #f1faee);
}

.container{
    width:380px;
    background:#fff;
    padding:35px;
    border-radius:20px;
    box-shadow:0 10px 30px rgba(0,0,0,0.1);
    text-align:center;
}

.logo{
    font-size:32px;
    font-weight:bold;
    color:#2d6a4f;
    margin-bottom:10px;
}

.logo span{
    color:#95d5b2;
}

.subtitle{
    color:#666;
    margin-bottom:30px;
    font-size:14px;
}

.price-box{
    background:#f8fff9;
    border:2px dashed #95d5b2;
    padding:20px;
    border-radius:15px;
    margin-bottom:25px;
}

.price-box h2{
    color:#2d6a4f;
    margin-bottom:10px;
}

.price{
    font-size:35px;
    font-weight:bold;
    color:#1b4332;
}

button{
    width:100%;
    padding:15px;
    border:none;
    border-radius:12px;
    background:#2d6a4f;
    color:white;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
    transition:0.3s;
}

button:hover{
    background:#1b4332;
    transform:translateY(-2px);
}

.secure{
    margin-top:15px;
    font-size:12px;
    color:#888;
}

</style>
</head>

<body>

<div class="container">

    <div class="logo">
        Matcha<span>Wave</span>
    </div>

    <p class="subtitle">
        Fresh Matcha • Secure Payment
    </p>

    <div class="price-box">
        <h2>Total Payment</h2>
        <div class="price">Rp 10.000</div>
    </div>

    <button id="pay">
        Pay Now
    </button>

    <div class="secure">
        Secure payment powered by Midtrans
    </div>

</div>

<script>

document.getElementById('pay').onclick = async function(){

  try {

    const res = await fetch('checkout.php');

    if(!res.ok){
      throw new Error("checkout.php error");
    }

    const token = await res.text();

    window.snap.pay(token, {

      onSuccess: function(result){
        alert("Pembayaran berhasil!");
        console.log(result);
      },

      onPending: function(result){
        alert("Menunggu pembayaran");
        console.log(result);
      },

      onError: function(result){
        alert("Pembayaran gagal");
        console.log(result);
      }

    });

  } catch(err){

    console.error(err);
    alert("Terjadi error: " + err.message);

  }

};

</script>

</body>
</html>