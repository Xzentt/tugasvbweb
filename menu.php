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
    <title>Menu | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <style>
        body.bg-image{
            background-image: url('./img/bg-pm.jpg');
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
        <h2 class="text-center">Pilih Kategori Menu:</h2>
        <div class="row menu-list d-flex justify-content-between align-item-center pt-5">
            <div class="col-md-3 my-3">
                <div class="card">
                    <img src="./img/skincare_menu.jpg" class="card-img-top" alt="ilustrasi skincare">
                    <div class="card-body">
                        <h5 class="card-title">Skincare</h5>
                        <p class="card-text">Learn about the best skincare routines and products for Indonesian women.</p>
                        <a href="skincare.php" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                    <img src="./img/makeup_menu.jpg" class="card-img-top" alt="ilustrasi makeup">
                    <div class="card-body">
                        <h5 class="card-title">Make Up</h5>
                        <p class="card-text">Discover the latest makeup trends and tutorials for Indonesian women</p>
                        <a href="makeup.php" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                    <img src="./img/fashion_menu.jpg" class="card-img-top" alt="ilustrasi fashion">
                    <div class="card-body">
                        <h5 class="card-title">Fashion</h5>
                        <p class="card-text">Get the latest fashion and style for women in Indonesia</p>
                        <a href="fashion.php" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 my-3">
                <div class="card">
                    <img src="./img/healthy_food_menu.jpg" class="card-img-top" alt="ilustrasi healthyfood">
                    <div class="card-body">
                        <h5 class="card-title">Healthy Food</h5>
                        <p class="card-text">Learn about healthy and delicious food options and recipes for Indonesia women.</p>
                        <a href="healthyfood.php" class="btn btn-primary">Kunjungi</a>
                    </div>
                </div>
            </div>
        </div>
    </main>    

    <?php include("template_footer.php") ?>
</body>
</html>
