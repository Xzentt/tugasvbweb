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
    <title>About | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        img{
            width:40px;
            border-radius:50%;  
        }
        body.bg-image{
            background-image: url('./img/bg-pmm.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        .content{
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

    <div class="container content">
        <h2 class="text-center">Tentang Kami</h2>
        <p>Standar kecantikan menjadi fenomena yang terjadi saat ini. Dimana manusia memiliki hak istimewa yang diperoleh karena kecantikan atau ketampanan yang cukup mempengaruhi karir dan pandangan orang lain terhadap mereka. Istilah ini adalah standar penerimaan yang lebih mengacu kepada orang yang berpenampilan menawan, sehingga kemampuannya menjadi nomor sekian. 
            Tak hanya itu, media sosial ikut andil dalam memberikan tekanan mental terutama pada perempuan.
            Sehingga, penting bagi perempuan untuk mencari pemahaman yang mampu membuat mereka mengerti bahwa kecantikan adalah menjadi diri sendiri dan menerima diri sendiri, serta memahami bahwa konsep kecantikan itu beragam. Sehingga berdasarkan fenomena yang sedang terjadi, kami memutuskan untuk membuat project aplikasi berbasis web dengan nama Vallberry.beauty.</p>
            <p>Secara garis besar Vallberry.beauty merupakan suatu web kecantikan yang menyediakan berbagai menu antara lain skincare, makeup, fashion, healthy food, dan fitur konsultasi online. Fitur tersebut tersedia untuk membantu orang orang yang tidak memiliki kepercayaan diri terhadap dirinya, sehingga mereka termotivasi untuk melakukan suatu perubahan.</p>
    </div>
    <div class="container content">
        <h2 class="text-center">Tentang Pengembang</h2>
        <div class="row mt-5 text-center container">
            <div class="col-lg-3">
                <img class="img-thumbnail rounded-circle w-75"src="./item/US/jjj.jpeg" alt="" onclick="window.open('https://instagram.com/s_lath02i')">
                <h5>SUNNIYAH JEHAN LATHIFAH</h5>
                <p>4C | 21083000065</p>
            </div>
            <div class="col-lg-3">
                <img class="img-thumbnail rounded-circle w-75"src="./item/US/nandita.jpg" alt="" onclick="window.open('https://instagram.com/nanditatya')">
                <h5>NANDITA CINTYA LESTARI</h5>
                <p>4C | 21083000069</p>
            </div>
            <div class="col-lg-3">
                <img class="img-thumbnail rounded-circle w-75"src="./item/US/feliksia.jpg" alt="" onclick="window.open('https://instagram.com/feliksya_hadu')">
                <h5>FELIKSIA NURIYADI</h5>
                <p>4C | 21083000085</p>
            </div>
            <div class="col-lg-3">
                <img class="img-thumbnail rounded-circle w-75"src="./item/US/rosy.jpg" alt="" onclick="window.open('https://instagram.com/rosyaudry__')">
                <h5>ROSY AUDRY HARDINI</h5>
                <p>4C | 21083000088</p>
            </div>
            
        </div>
    </div>

    
    

    <?php include("template_footer.php") ?>
</body>
</html>
