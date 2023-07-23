<?php 
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    // require "function.php";
    if(!($_SESSION["username"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bayar | Vallberry Beauty</title>
    <style>
        body.bg-image{
            background-image: url('./img/bg-konsul.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-image">
    <?php include "template_header.php" ?>
    <div class="container d-flex justify-content-center">
        <div class="card py-5" style="width: 70%;">
            <img src="./img/whatsapp_logo.png" class="card-img-top mx-auto w-25" alt="WhatsApp Logo">
            <div class="card-body text-center">
                <h4>Username : <?= $_SESSION["username"] ?></h4>
                <h6>Tanggal Pemesanan <?= date('d F Y')  ?></h6>
                <br>
                <p class="card-text">
                    Untuk melakukan pembayaran silahkan melakukan screenshot dari halaman ini dan kirimkan kepada admin melalui tautan dibawah untuk mendapat panduan penyelesaian pembayaran lebih lanjut. Terima Kasih.
                </p>
                <a href="https://wa.me/6282324944828/?text=Saya%20siap%20untuk%20melakukan%20pembayaran.%20Mohon%20berikan%20informasi%20pembayaran%20yang%20diperlukan%2C%20seperti%20nomor%20rekening%20atau%20metode%20pembayaran%20yang%20dapat%20saya%20gunakan.%0A%0AUsername%20%3A%20<?= $_SESSION["username"] ?>%0ATanggal%20pemesanan%20%3A%20<?= date('d%20F%20Y') ?>%0A%0ATerima%20Kasih." class="btn btn-primary">Lanjutkan</a>
            </div>
        </div>
    </div>
    <?php include("template_footer.php") ?>
</body>
</html>