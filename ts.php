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
    <title>Trending Styles | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="tsc.css">
    <style>
        img{
            width:240px;
        }
        body.bg-image{
            background-image: url('./img/bg-ts.jpg');
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

    <main class="d-flex flex-column justify-content-centers">
        <h2 class="text-center">TRENDING STYLES</h2>
        <div class="row pt-5 ">
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/atasan rajutan.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Outfit dengan material rajut (knit) bukan hanya bisa menghangatkan tubuh saat musim hujan tapi juga bisa membuat look kamu lebih fashionable. Apalagi, saat ini sudah banyak baju rajut wanita kekinian yang mudah dipasangkan dengan berbagai item fashion lain, seperti celana jeans, kulot, rok, dsb.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/cargo pants.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Beralih ke celana, ternyata ada salah satu jenis celana yang berhasil menarik perhatian banyak orang yaitu celana cargo. Jika dulu celana cargo identik dipakai oleh para tentara dan para pria saja, sekarang celana cargo malah menjadi outfit kekinian yang dipadu-padankan dengan berbagai outfit. Uniknya, trend ini cukup keren dan terlihat sangat elegan lho! bahkan mulai banyak selebgram yang memeragakan outfit celana cargo dipadukan dengan kaos polos atau blouse polos.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/cobalt blue.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Warna kuat yang keluar dari 2023 sejauh ini adalah biru cobalt. Warna yang cukup cerah untuk menjamin ini cukup keren untuk dipakai sehari-hari. Jenis warna biru tua ini akan menggairahkan, loh!</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="row pt-3">
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/leather jacket.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Bagi mereka yang ingin tampil menonjol dalam tren fashion 2023, jaket kulit adalah bagian yang sangat diperlukan yang dapat ditata dengan berbagai cara agar sesuai dengan setiap kesempatan. Jaket kulit adalah tambahan yang berguna untuk koleksi apa pun karena pesona klasiknya dan kemampuannya untuk menyempurnakan pakaian apa pun.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/maxi skirt.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">High fashion terakhir yang akan trend di tahun 2023 adalah Maxi skirt. Berbeda dengan rok mini yang trending di tahun sebelumnya, maxi skirt adalah rok yang identik memiliki ukuran 3/4 , berhias saku di pinggir, dengan motif abstrak atau kotak-kotak. Sebenarnya maxi skirt masih sejalan dengan high fashion celana cargo karena memberikan look yang edgy dan juga sportif.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/pakaian bernuansa ungu.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Ada yang unik nih di tahun 2023, salah satunya adalah trend pakaian bernuansa ungu yang akan memenuhi jagat fashion di tahun ini. Berbagai warna ungu seperti warna lilac, ungu tua dan ungu-ungu yang lainnya di prediksi akan memiliki banyak penggemar terutama bagi para wanita. Jika Anda teliti maka sekarang ini mulai banyak fashion kekinian yang identik dengan warna ungu seperti celana, dress, outer, baju, sepatu dan masih banyak lagi.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/pakaian dengan banyak bulu.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Pakaian yang bermodel bulu memang sudah trend sejak dahulu, namun pernah menghilang dan jarang yang memakainya. Namun nampaknya di tahun 2023 ini pakaian dengan banyak bulu mulai trend lagi dan menjadi high fashion lho! jika Anda ingin mengikuti trend ini maka silahkan memilih berbagai outfit yang identik dengan bulu-bulu ya! Pakaian ini sudah sering ditampilkan di fashio week di Indonesia, yang artinya akan segera menjadi trend fashion.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 my-2">
                <div class="card" style="width: 18rem;">
                    <img src="./item/FASHION/trending styles/pakaian dengan nuansa floral.png" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Baju dengan motif bunga yang sudah ada sejak dulu ini ternyata mulai trend kembali di tahun ini. Baju dengan motif bunga memang menjadi salah satu motif yang paling disukai sebagian wanita Indonesia karena memberikan kesan anggun, elegan dan manis. Beberapa fashion yang trend dengan tema floral diantaranya adalah dress dan juga blouse. Pastikan memilih motif yang kekinian agar tampil elegan ya!</p>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
