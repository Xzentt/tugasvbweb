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
    <title>Popular Skincare | Vallberry Beauty</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="popular.css">
    <style>
        .card-img-top{
            height:300px;
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
        <div class="container">
            <h2 class="text-center">POPULAR SKINCARE</h2>
            <div class="row py-5">
                <div class="col-lg-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/popular_skincare_products/All_skin_type _2.jpg" class="card-img-top" alt="all skin type 2">
                        <div class="card-body">
                            <h5 class="card-title">The Originote - Hyalucera Moisturizer</h5>
                            <a href="https://shopee.co.id/The-Originote-Hyalucera-Moisturizer-Gel-Pelembab-Wajah-Memperbaiki-Skin-Barrier-dan-Primer-Menghidrasi-Kulit-Wajah-with-Hyaluronic-Acid-Ceramide-i.710619388.10492590941?sp_atk=6fa59797-fc1a-4f9a-ba6d-c97d81decb5d&xptdk=6fa59797-fc1a-4f9a-ba6d-c97d81decb5d" class="btn btn-primary">Rp 42.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card" >
                        <img src="./item/SKINCARE/popular_skincare_products/All skin type.jpeg" class="card-img-top" alt="all skin type">
                        <div class="card-body">
                            <h5 class="card-title">Somethinc Low pH Gentle Jelly Cleanser</h5>
                            <a href="https://shopee.co.id/SOMETHINC-Low-pH-Gentle-Jelly-Cleanser-Sabun-Cuci-Muka-Semua-Jenis-Kulit-i.195455930.3030299955?sp_atk=c9345926-6182-4db5-87c8-9550a266a6fd&xptdk=c9345926-6182-4db5-87c8-9550a266a6fd" class="btn btn-primary">Rp 99.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card" >
                        <img src="./item/SKINCARE/popular_skincare_products/All skin type 3.jpg" class="card-img-top" alt="all skin type 3">
                        <div class="card-body">
                            <h5 class="card-title">Avoskin Your Skin Bae Serum</h5>
                            <a href="https://shopee.co.id/%E2%9D%A4-BELIA-%E2%9D%A4-AVOSKIN-Your-Skin-Bae-YSB-Serum-Moisturizer-Toner-Niacinamide-Alpha-Arbutin-Vit-C-Salicylic-Acid-i.48382819.10104575736?sp_atk=c1085b9f-f706-4358-aae2-cb4a54ce0115&xptdk=c1085b9f-f706-4358-aae2-cb4a54ce0115" class="btn btn-primary">Rp 129.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card" >
                        <img src="./item/SKINCARE/popular_skincare_products/Dry Skin.png" class="card-img-top" alt="Dry Skin">
                        <div class="card-body">
                            <h5 class="card-title">SKINTIFIC - Purifying Barrier Ice Cream Cleansing Balm</h5>
                            <a href="https://shopee.co.id/SKINTIFIC-MSH-Niacinamide-Brightening-Moisture-Gel-30g-Moisturizer-Krim-Wajah-Face-Cream-Pelembab-Wajah-Skintific-Moisturizer-Niacinamide-Brightening-Cream-Krim-Pemutih-i.380266264.18453646824?sp_atk=9d894952-b25e-48a0-a14f-fc2a0c5c1db1&xptdk=9d894952-b25e-48a0-a14f-fc2a0c5c1db1" class="btn btn-primary">Rp 159.000</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row py-5">
                <div class="col-lg-3 my-2">
                    <div class="card">
                        <img src="./item/SKINCARE/popular_skincare_products/All skin type & combinatiion skin.jpg" class="card-img-top" alt="All skin type & combinatiion skin">
                        <div class="card-body">
                            <h5 class="card-title">Implora Perfect Shield Sunscreen SPF-40 PA ++++</h5>
                            <a href="https://shopee.co.id/%E2%9D%A4-BELIA-%E2%9D%A4-IMPLORA-Perfect-Shield-Sunscreen-SPF-40-PA-Sunscreen-Wajah-Pelindung-dari-Sinar-Matahari-BPOM-i.48382819.21546398225?sp_atk=9a94b33f-9454-4d8d-b562-1a62f6d68ad6&xptdk=9a94b33f-9454-4d8d-b562-1a62f6d68ad6" class="btn btn-primary">Rp 30.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card" >
                        <img src="./item/SKINCARE/popular_skincare_products/Oily skin.jpeg" class="card-img-top" alt="Oily skin">
                        <div class="card-body">
                            <h5 class="card-title">NPURE Centella Asiatica Face Toner</h5>
                            <a href="https://shopee.co.id/%E2%9D%A4-BELIA-%E2%9D%A4-N'PURE-Centella-Asiatica-Cica-Series-Toner-Essence-Face-Wash-Clear-Pad-Npure-Cica-Stater-Kit-BPOM-i.48382819.9790077516?sp_atk=4f602b5e-7494-4c9c-aaa3-9af25fd14519&xptdk=4f602b5e-7494-4c9c-aaa3-9af25fd14519" class="btn btn-primary">Rp 90.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card" >
                        <img src="./item/SKINCARE/popular_skincare_products/Oily skin 2.jpg" class="card-img-top" alt="Oily Skin 2">
                        <div class="card-body">
                            <h5 class="card-title">Oil Free Brightening Daily Moisturizer</h5>
                            <a href="https://shopee.co.id/Azarine-Oil-Free-Brightening-Daily-Moisturizer-Untuk-Kulit-Berminyak-Berjerawat-Mencerahkan-Bekas-Jerawat-40ml-i.80036545.8369348701?xptdk=a20f280d-8f0e-438a-a404-a53403fa301a" class="btn btn-primary">Rp 69.000</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 my-2">
                    <div class="card" >
                        <img src="./item/SKINCARE/popular_skincare_products/sunscreen.jpg" class="card-img-top" alt="sunscreen">
                        <div class="card-body">
                            <h5 class="card-title">UV Shield Essential Sunscreen Gel SPF 30 PA+++</h5>
                            <a href="https://shopee.co.id/%E2%9D%A4-BELIA-%E2%9D%A4-WARDAH-UV-Shield-Aqua-Fresh-Essence-Active-Protection-Serum-SPF-50-PA-Sunscreen-Sun-Screen-Baby-Bunny-i.724194134.16328649511?sp_atk=5070e734-f25c-4265-8a09-d2f4e7589201&xptdk=5070e734-f25c-4265-8a09-d2f4e7589201" class="btn btn-primary">Rp 28.000</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <?php include("template_footer.php") ?>
</body>
</html>
