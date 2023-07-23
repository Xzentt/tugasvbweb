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
    <title>Makeup Tutorials | Vallberry Beauty</title>
    <style>
        h4{
            text-align:center;
        }
    </style>
    <!-- <link rel="stylesheet" type="text/css" href="mtc.css"> -->
    <style>
        body.bg-image{
            background-image: url('./img/bg-mu.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        h4{
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
        <h2 class="text-center">Makeup Tutorials</h2>
        <div class="container">
            <div class="section d-flex flex-column align-items-center">
                <div class="tutorial py-4">
                    <h4>Tutorial makeup sehari-hari</h4>
                    <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/YM2U2CboLCE" title="Makeup Remaja Simple 30 Ribuan👧!! Full Makeup Pakai 5 Produk Aja &amp; Semuka Pakai Eyeshadow!" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tutorial py-4">
                    <h4>Tutorial makeup untuk pemula</h4>
                    <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/XtUrjcoKfaw" title="MAKEUP UNTUK PEMULA... ANTI GAGAL!! | GELANGELICCA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tutorial py-4">
                    <h4>Tutorial makeup mata</h4>
                    <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/OPYzwyHl3cc" title="Cuma Lima Menit! Tutorial Cutcrease Profesional (UNTUK PEMULA)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tutorial py-4">
                    <h4>Tutorial contouring dan highlighting</h4>
                    <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/tbU6AdJrHRU" title="Cara contour dan highlight wajah yang benar untuk pemula (sesuai bentuk wajah)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tutorial py-4">
                    <h4>Tutorial lipstik</h4>
                    <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/GmcFfX-AQh4" title="TUTORIAL OMBRE LIPS ALA KOREA || GRADIENT LIPS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tutorial py-4">
                    <h4>Tutorial menggunakan eyeliner</h4>
                    <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/wwKv0UM6IwQ" title="How To: 9 Different Eyeliner Styles on HOODED EYES | Easy Beginner Friendly Tutorial" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tutorial py-4">
                    <h4>Tutorial makeup ala profesional</h4>
                    <div class="video-container">
                    <iframe width="821" height="433" src="https://www.youtube.com/embed/ri-BM1i4WSs" title="How To Do Your Makeup Like A Pro Makeup Artist – Full Face Tutorial by #BobbiBrown" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="tutorial py-4">
                    <h4>Tutorial makeup trends</h4>
                    <div class="video-container">
                    <iframe width="853" height="480" src="https://www.youtube.com/embed/PGtEbkdWjnY" title="Recreating My Followers Makeup Looks" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
