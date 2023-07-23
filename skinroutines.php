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
    <title>Skincare Routines | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="sr.css">
    <style>
        .card-img-top {
            height: 200px; 
            object-fit:contain;
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
        <h2 class="text-center">SKINCARE ROUTINES</h2>
        <div class="row py-5">
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/Acne skin.jpg" class="card-img-top" alt="Acne skin">
                    <div class="card-body">
                        <h5 class="card-title">Skincare routine for Acne skin</h5>
                        <p class="card-text">Dalam memilih produk skincare pada kulit acne tidak bisa sembarangan sama seperti kulit sensitive diperlukan juga kandungan yang tepat. Pilih produk yang khusus untuk kulit berjerawat, juga bisa konsultasi pada dokter kulit. skincare routines untuk kulit acne tidak beda dengan kulit lainya yaitu Melakukan Double cleasing, selanjutnya menggunakan toner yang memiliki kandungan tertentu untuk kulit berjerawat setelah itu menggunakan serum,terakhir menggunakan sunscreen pada pagi/siang hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/Combination skin.jpg" class="card-img-top" alt="combination skin">
                    <div class="card-body">
                        <h5 class="card-title">SKINCARE ROUTINES FOR COMBINATION SKIN</h5>
                        <p class="card-text">Pertama, lakukan Double cleansing yaitu menggunakan micelar water  & facial wash. Selanjutnya gunakan Hydrating Toner agar bagian kulit lainnnya tidak kering.Gunakan serum Niacinamide diamana dapat mengontrol minyak pada wajahSetelah itu gunakan Mousturizer dan tetap menggunakan Sunscreen pada pagi dan siang hari</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/Day skincare routine.jpg" class="card-img-top" alt="Day skincare routine">
                    <div class="card-body">
                        <h5 class="card-title">DAY SKINCARE ROUTINE</h5>
                        <p class="card-text">Pertama menggunakan Facial Wash,Selanjutnya menggunakan Toner gunakan Serum. Selanjutnya gunakan Mousturizer dan terakhir menggunakan Sunscreen</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/dry skin.jpg" class="card-img-top" alt="dry skin">
                    <div class="card-body">
                        <h5 class="card-title">SKINCARE ROUTINES FOR DRY SKIN</h5>
                        <p class="card-text">Pertama gunakan Oil Cleanse dan Hydrating Cleanser. selanjutnya gunakan Hydrating Toner, untuk menghidrasi kulit yang kering. setelah itu gunakan Hydrating Serum dan terakhir Simple Moisturizer</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row py-5">
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/Night skincare routine.jpg" class="card-img-top" alt="Acne skin">
                    <div class="card-body">
                        <h5 class="card-title">NIGHT SKINCARE ROUTINE</h5>
                        <p class="card-text">Pertama lakukan double cleasing yaitu gunakan micelar water dan Facial Wash,Selanjutnya menggunakan Toner, gunakan Serum. Terakhir gunakan moisturizer.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/oily skin.jpg" class="card-img-top" alt="combination skin">
                    <div class="card-body">
                        <h5 class="card-title">SKINCARE ROUTINES FOR OILY SKIN</h5>
                        <p class="card-text">pertama gunakan Facial Wash.Setelah itu gunakan Toner untuk oily skin. selanjutnya gunakan serum. gunakan moisturizer untuk oily skin. dan terakhir Sunscreen dengan tekstur yang ringan dan mudah meresap</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/sensitive skin.jpg" class="card-img-top" alt="Day skincare routine">
                    <div class="card-body">
                        <h5 class="card-title">Skincare routine for sensitive skin</h5>
                        <p class="card-text">Dalam memilih produk skincare pada kulit sensitive tidak bisa sembarangan. Pilih produk yang khusus untuk kulit sensitive, juga bisa konsultasi pada dokter kulit. skincare routines untuk kulit sensitive tidak beda dengan kulit lainya yaitu Melakukan Double cleasing, selanjutnya menggunakan toner setelah itu menggunakan serum. terakhir menggunakan sunscreen pada pagi/siang hari.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 my-3">
                <div class="card">
                    <img src="./item/SKINCARE/skincare routines/skin exfoliation.jpg" class="card-img-top" alt="dry skin">
                    <div class="card-body">
                        <h5 class="card-title">Eksfoliasi Kulit</h5>
                        <p class="card-text">Eksfoliasi kulit adalah pengakatan sel kulit mati dan kotoran lain pada wajah. Eksfoliasi kulit membuat kulit terlihat lebih sehat, lebih cerah, dan lebih muda. Hal ini juga dapat meningkatkan produksi kolagen, yang menurun seiring bertambahnya usia</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
