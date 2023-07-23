<?php
    error_reporting(E_ALL & ~E_NOTICE);
    require "function.php";
    session_start();
    if(!($_SESSION["username"])){
        header("Location: login.php");
    }

    $query = "SELECT * FROM users WHERE username = '{$_SESSION["username"]}'";
    $datas = query("SELECT * FROM consultations ORDER BY created DESC");
    $result = mysqli_query($conn, $query);
    // if(mysqli_num_rows($result)===1){
    //     $row = mysqli_fetch_assoc($result);
    //     if($row["payment_confirm"] === NULL){
    //         header("Location: bayar.php");
    //         exit();
    //     }
    // }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Skincare Tips & Tricks | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="tats.css">
    <style>
        .card-img-top {
        height: 200px; 
        object-fit: cover;
        }
        body.bg-image{
            background-image: url('./img/bg-sr.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
    </style>
</head>
<body class="bg-image">
    <?php 
        include("template_header.php");
    ?>

    <main>
        
        <h2 class="text-center">SKINCARE TIPS & TRICKS</h2>
        <div class="container">
            <div class="row py-4">
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/begadang.jpg" class="card-img-top" alt="jangan begadang">
                        <div class="card-body">
                            <h5 class="card-title">Jangan begadang</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/cuci tangan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Cuci Tangan Anda Sebelum Menerapkan Produk</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/Double cleansing.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Lakukan double cleansing</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/Exfoliating.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Exfoliating</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-4">
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/masker alami.jpg" class="card-img-top" alt="jangan begadang">
                        <div class="card-body">
                            <h5 class="card-title">Masker Alami</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/Menjaga Kelembapan.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Jaga Kelembapan kulit</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/Sheet Mask Tricks.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Sheet mask tricks</h5>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/skincare tips and tricks/wear sunscreen daily.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Gunakan sunscreen secara rutin</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
