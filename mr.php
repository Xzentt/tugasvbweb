<?php
    include("template_header.php");
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
    <title>Makeup Trends | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="mrc.css">
    <style>
        img{
            height:75vh;
        }
        .image-container {
            position: relative;
            display: inline-block;
        }
        
        .image-text {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 10px;
            color: #fff;
            opacity: 0;
        }

        .image-text:hover{
            transition: opacity 0.3s ease-in-out;
            opacity:1;
        }
        
        body.bg-image{
            background-image: url('./img/bg-m.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        
    </style>


</head>
<body class="bg-image">
    <main>
        <h2 class="text-center">MAKE-UP TRENDS</h2>
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 my-2 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/BL.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Bold Lips</h6>
                            <p>Bibir tebal yang selalu klasik akan lebih hadir pada tahun 2023 daripada saat ini.  makeup ini telah menggunakan warna bibir gelap yang lebih berani pada klien saya dan menggunakan lebih sedikit produk di sisi corak — 2023 adalah tentang pop warna," kata Moore tentang tren tersebut.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-2 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/BLUSH.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Blush</h6>
                            <p>Blush on telah membuat comeback untuk sementara waktu, dengan tren seperti "sunburn blush" dan "blush draping" berkuasa di karpet merah dan IRL – dan itu adalah pokok yang akan berlanjut ke tahun baru.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-2 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/BS.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Bare Skin</h6>
                            <p>Ini merujuk pada tampilan wajah tanpa penggunaan make up atau kosmetik apapun. Singkatnya, bare skin face adalah wajah polosan atau wajah tanpa make up</p>
                        </div>
                    </div>
                </div>
                
                
            </div>
            <div class="row py-4">
                <div class="col-lg-4 my-2 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/COS.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Corals Of Spring</h6>
                            <p>Karena nuansa ini muncul, dia suka memfokuskan nuansa pada bibir atau mata dan menjaga sisa wajah agak telanjang atau dibanjiri nuansa yang hampir tidak ada dalam keluarga warna yang sama. "Untuk mengambil nada ini yang benar-benar tak terduga, cobalah bibir semangka dengan kilau vinil gloss tinggi," tambah penata rias</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-2 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/DG.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Delicates Gemstones</h6>
                            <p>Delicate gemstone adalah salah satu gaya makeup yang sedang naik daun. Gaya ini menonjolkan area mata dengan batu permata kecil yang ditata dengan unik. Biasanya gaya ini banyak dipakai saat menikmati konser musik atau acara seru lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 my-2 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/GE.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Graphic Eyeshadows</h6>
                            <p>kita tidak perlu eyeliner cair untuk menciptakan tampilan grafis dan berdampak tinggi. Keita Moore, seorang penata rias selebriti dan duta merek Maybelline mengatakan dia sangat senang bereksperimen dengan bayangan yang lebih berani dengan klien saya menggunakan bayangan.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/NR.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Neon Rainbow</h6>
                            <p>Keluar dari liner grafis, kata Baker mendorong kita untuk "melangkah ke fantasi futuristik dengan semburat neon yang semarak yang akan menangkap kerumunan mana pun." "Sekarang, lebih dari sebelumnya, orang-orang condong ke hal-hal yang membuat mereka merasa baik yang meliputi neon, energi, dan semangat,"</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 d-flex justify-content-center">
                    <div class="image-container">
                        <img src="./item/MAKEUP/makeup_trends/PWS.png" alt="Gambar">
                        <div class="image-text">
                            <h6>Paster with presence</h6>
                            <p>Musim panas 2023, Reiko Brown memprediksi pastel akan kembali dengan pendekatan modern yang menyegarkan. "Tidak berkapur atau terlalu manis, pastel ini memiliki kehadiran. Mereka adalah pastel kencang yang lebih hangat, sehingga cocok untuk semua warna kulit dan kelompok umur," jelasnya.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
