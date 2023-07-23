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
    <title>Healthy Food | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        .content{
            background-color: rgba(255,255,255,.8);
            padding:20px;
            border-radius:5px;
        }
        body.bg-image{
            background-image: url('./img/bg-healthy.jpeg');
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

    <main class="container">
        <div class="content">
            <h2 class="text-center">Learn about healthy and delicious food options and recipes for Indonesia women.</h2>
            <article>
                <h3>Pengertian</h3>
                <p>Makanan sehat adalah jenis makanan yang mengandung nutrisi yang sesuai dan cukup untuk memenuhi kebutuhan tubuh serta dapat menjaga kesehatan tubuh secara keseluruhan. 
                    Makanan sehat mengandung berbagai macam zat gizi seperti karbohidrat, protein, lemak baik, vitamin, mineral, serat, dan antioksidan. 
                    Makanan sehat juga minim zat aditif, gula tambahan, garam berlebih, pemanis buatan, dan bahan pengawet.</p>
            </article>
            <article>
                <p>Konsumsi makanan sehat sangat penting untuk menjaga kesehatan tubuh, mengatur berat badan, meningkatkan energi, meningkatkan daya tahan tubuh, mencegah berbagai penyakit 
                    seperti diabetes, obesitas, penyakit jantung, dan stroke, serta menjaga keseimbangan mental dan emosionMakanan sehat dapat ditemukan dalam berbagai macam makanan seperti buah-buahan, sayuran, biji-bijian, daging tanpa lemak, ikan, telur, produk susu rendah lemak, kacang-kacangan, dan minyak sehat seperti minyak zaitun atau minyak kelapa. 
                    Penting untuk mengonsumsi makanan sehat secara seimbang dan bervariasi agar mendapatkan semua nutrisi yang diperlukan oleh tubuh.</p>
            </article>

            <h3>Kategori:</h3>
            <ul class="menu-list">
                <li><a style="text-decoration:none;" href="hr.php">Healthy Recipes</a></li>
                <li><a style="text-decoration:none;" href="hsn.php">Healthy Snacks</a></li>
                <li><a style="text-decoration:none;" href="hmp.php">Healthy Meal Plans</a></li>
            </ul>
        </main>    
           
        <?php include("template_footer.php") ?>
</body>
</html>
