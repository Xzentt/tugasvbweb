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
    <title>Makeup | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <style>
        body.bg-image{
            background-image: url('./img/industrie-cosmetique-1.jpg');
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

    <main class="container">
        <div class="content">
            <h2 class="text-center">Discover the latest makeup trends and tutorials for Indonesian women</h2>
            <article>
                <h3>Pengertian</h3>
                <p> Makeup adalah seni atau teknik menggunakan produk kosmetik untuk meningkatkan penampilan seseorang. Tujuan dari makeup bisa berbagai macam, seperti untuk menyembunyikan kekurangan pada wajah, menyoroti fitur yang mencolok, atau menciptakan tampilan yang lebih dramatis dan ekspresif. 
                    Makeup mencakup penggunaan foundation, bedak, blush on, eyeshadow, eyeliner, maskara, lipstik, dan berbagai produk lainnya. Penggunaan makeup dapat dilakukan untuk acara sehari-hari, sosial, atau profesional seperti pemotretan atau panggung. 
                    Makeup juga merupakan bentuk seni yang dapat mengungkapkan kreativitas dan keindahan seseorang.</p>
            </article>

            <h3>Kategori:</h3>
            <ul class="menu-list">
                <li><a style="text-decoration:none;" href="mt.php">Makeup Tutorials</a></li>
                <li><a style="text-decoration:none;" href="mr.php">Makeup Trends</a></li>
                <li><a style="text-decoration:none;" href="mtats.php">Makeup Tips and Tricks</a></li>
            </ul>
        </main>    
           
        <?php include("template_footer.php") ?>
</body>
</html>
