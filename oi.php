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

    if(isset($_POST["kirim"])){
        if(send($_POST)>0){
            echo "<script>
                     alert('pesan terkirim');
                     document.location.href = 'kontak.php';
                 </script>";
        }
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Outfit Inspirations | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="oic.css">
    <style>
        p{
            text-transform: capitalize;
            
        }
        body.bg-image{
            background-image: url('./img/bg-ts.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        h4{
            text-transform:capitalize;
        }
        .align-items-center{
            background-color: rgba(255,255,255,.8);
            padding:20px;
            border-radius:5px;
        }
    
    </style>
</head>
<body class="bg-image">
    <?php 
        include("template_header.php");
    ?>

    <main>
        <h3 class="text-center">Outfit Inspirations</h3>
        <div class="container">
            <div class="row d-flex py-4 justify-content-center">
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/bikers.jpg" class="img-thumbnail" alt="...">
                    <h4 class="text-center">bikers</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p>buat kamu anak motor atau yang suka sunmori ataupun night riding, outfit disamping bisa jadi contoh supaya kamu tetep kece loh. jangan lupa pakai helm, keselamatan nomor 1.</p>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/first date.jpg" class="img-thumbnail" alt="...">
                    <h4 class="text-center">first date</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p class="text-center">inspirasi outfit buat kalian yang mau first date nih. buat pasangan kalian terpesona dengan penampilan kalian</p>
                </div>
            </div>
            <div class="row d-flex py-4 justify-content-center">
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/formal.jpg" class="img-thumbnail" alt="...">
                    <h4 class="text-center">formal</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p>inspirasi outfit formal yang cocok buat kamu yang bekerja kantoran. </p>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/interview.jpg" class="img-thumbnail" alt="...">
                    <h4 class="text-center">interview</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p>inspirasi outfit yang cocok buat kamu para pejuang loker yang pastinya akan menghadapi interview kerja, pakai pakaian yang menarik, sopan dan tentunya nyaman yaa.</p>
                </div>
            </div>
            <div class="row d-flex py-4 justify-content-center">
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/kuliah.jpg" class="img-thumbnail" alt="...">
                    <h4 class="text-center">kuliah</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p>style diatas cocok digunakan untuk kuliah, karena nyaman dan terkesan tetap sopan. jangan lupa tas ransel dan memakai sepatu. jika kamu berhijab tambahkan hijab dengan warna yang sesuai.</p>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/main.jpg" class="img-thumbnail" alt="...">
                    <h4 class="text-center">main</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p>inspirasi outfit buat kamu yang mau pergi main supaya tetep nyaman dan tentunya kece. buat kamu yang berhijab, tinggal sesuaikan warna hijabmu dengan warna yang cocok yaa.</p>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/summer.png" class="img-thumbnail" alt="...">
                    <h4 class="text-center">summer</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p>inspirasi outfit buat kamu yang ingin bepergian saat musim panas</p>
                </div>
                <div class="col-md-3 mt-3">
                    <img src="./item/FASHION/outfit inspirations/winter.jpg" class="img-thumbnail" alt="...">
                    <h4 class="text-center">winter</h4>
                </div>
                <div class="col-md-3  d-flex flex-column justify-content-center align-items-center">
                    <p>buat kamu yang suka keluar saat musim dingin, tetap pakai pakaian yang hangat dan nyaman ya. kalian bisa pakai beberapa contoh diatas.</p>
                </div>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
