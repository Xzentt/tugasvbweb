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
    <title>Skincare | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style>
        body.bg-image{
            background-image: url('./img/bg-skinn.jpg');
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
            <h2 class="text-center">Learn about the best skincare routines and products for Indonesian women.</h2>
            <article>
                <h3>Pengertian</h3>
                <p>Skincare atau yang disebut juga perawatan kulit merupakan bagian dari rangkaian perawatan wajah sehari-hari karena harus dilakukan secara teratur. 

                    Perawatan kulit seharusnya menjaga kulit wajah supaya tetap sehat. Selain itu, kulit wajah yang sehat dengan perawatan dapat dikenali dari tekstur, warna, kelembaban, elastisitas dan iritasi kulit. 
                    
                    Terlebih, jika rajin menggunakan serangkaian tersebut kulit wajah akan bebas dari kusam, tidak mengalami penuaan dini, dan selalu tampak terhidrasi.
                    
                    Oleh karena itu, kami menyediakan layanan yang dapat membantu anda untuk memilih skincare yang tepat.</p>
            </article>

            <h3>Kategori:</h3>
            <ul class="menu-list">
                <li><a style="text-decoration:none;" href="skinroutines.php">Skicare Routines</a></li>
                <li><a style="text-decoration:none;" href="popular.php">Popular Skincare Product</a></li>
                <li><a style="text-decoration:none;" href="tipsandtriks.php">Skincare Tips and Tricks</a></li>
            </ul>
        </main>    
           
        <?php include("template_footer.php") ?>
</body>
</html>
