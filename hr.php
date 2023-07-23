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
    <title>Healthy Recipes | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="hrc.css">
    <style>
        
        body.bg-image{
            background-image: url('./img/bg-hrr.jpg');
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
        <h2 class="text-center">HEALTHY RECIPES</h2>
        <div class="container">
            <div class="row pt-3">
                <div class="col-md-6">
                    <img src="./item/HEALTHY FOOD/healthy recipes/1.jpeg" class="img-thumbnail" alt="...">
                </div>
                <div class="col-md-6">
                    <img src="./item/HEALTHY FOOD/healthy recipes/2.jpeg" class="img-thumbnail" alt="...">
                </div>
            </div>
            <div class="row pt-4">
                <div class="col-md-6">
                    <img src="./item/HEALTHY FOOD/healthy recipes/6.jpeg" class="img-thumbnail" alt="...">
                </div>
                <div class="col-md-6">
                    <img src="./item/HEALTHY FOOD/healthy recipes/4.jpeg" class="img-thumbnail" alt="...">
                </div>
            </div>
            <div class="row pt-4 d-flex justify-content-center">
                <div class="col-md-6">
                    <img src="./item/HEALTHY FOOD/healthy recipes/5.jpeg" class="img-thumbnail" alt="...">
                </div>
                <div class="col-md-6">
                    <img src="./item/HEALTHY FOOD/healthy recipes/3.jpeg" class="img-thumbnail" alt="...">
                </div>
            </div>
            <div class="row pt-4 d-flex justify-content-center">
                <div class="col-md-6">
                    <img src="./item/HEALTHY FOOD/healthy recipes/7.jpeg" class="img-thumbnail" alt="...">
                </div>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
