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
?><!DOCTYPE html>
<html>
<head>
    <title>Fashion News | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="fnc.css">
    <style>
        
        p{
            white-space: pre-wrap;
        }
        body.bg-image{
            background-image: url('./img/bg-ts.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        .row{
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

    <h2 class="text-center">Fashion News</h2>
    <main style="padding:10px;">
        <div class="row py-5 my-5" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.1);">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                <h5 class="text-center">Peragaan Busana Coperni Gabungkan Fashion dan Teknologi, Dibuka Robot Anjing</h5>
                <img src="./item/FASHION/fashion news/coperni.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-8">
                <p>    Coperni selalu memiliki cara untuk menarik perhatian pecinta fashion. Musim lalu, merek fashion mewah ini menciptakan gaun lewat semprotan langsung ke tubuh Bella Hadid sebagai penutup pertunjukan Musim SemiMusim Panas 2023. Kali ini, Coperni membawa anjing robot. Peragaan busana Copernis FallWinter 2023 di Paris Fashion Week dimulai di set lapang yang diisi dengan robot Spot Boston Dynamics yang langsung dikenali. Beberapa robot kuning seperti anjing mondar-mandir di set saat para model berjalan di antara mereka, saat pemandangan suara sekitar memenuhi udara. 	Robot-robot itu akhirnya mulai berinteraksi dengan para model salah satunya memakai lengan yang benar-benar menarik jaket dari bahu model dan, kemudian, memamerkan desain tas Coperni yang baru. Coperni selalu menunjukkan teknologi di runway. Momen momen ultra-viral SS23 Coperni sebenarnya hanyalah demonstrasi daya tarik merek fashion dengan teknologi. Fiksasi Coperni pada teknologi mutakhir seharusnya tidak mengherankan, barang khasnya adalah Swipe Bag yang khas, tas tangan gemuk yang terinspirasi oleh gerakan menggesek layar sentuh smartphone. The Swipe Bags adalah koleksi utama Coperni sehingga menampilkan pratinjau acara FW23 dengan tas tangan edisi khusus yang diukir dari meteorit.</p>
            </div>
        </div>
        <div class="row py-5 my-5" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.1);">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                <h5 class="text-center">JMFW 2024, Indonesia Tampilkan Produk Modest Fashion Unggulan</h5>
                <img src="./item/FASHION/fashion news/jmfw.jpeg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-8">
                <p>    Menteri Perdagangan Mendag Zulkifli Hasan meluncurkan Jakarta Muslim Fashion Week JMFW 2024 di Jakarta, Jumat 236. Acara ini mengangkat tema Discover Indonesian Modest Fashion Excellence. Melalui JMFW 2024, Zulkifli mengajak semua pihak dan buyer internasional melihat secara langsung modest fashion Indonesia yang luar biasa, baik dari sisi desain, keragaman corak, serta warna dan budaya yang melatarbelakangi. JMFW merupakan ajang untuk menampilkan fesyen muslim modest fashion terbaik di Indonesia. Untuk itu, Zulkifli berharap acara ini bisa menjadikan Indonesia sebagai barometer dan penentu tren trend setter modest fashion dunia. Selain itu, kegiatan ini diharapkan menjadi ajang jejaring kerja sama antara industri modest fashion dengan industri terkait di dalam dan luar negeri, serta tentunya dengan buyer internasional.</p>
            </div>
        </div>
        <div class="row py-5 my-5" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.1);">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                <h5 class="text-center">Gaun Polkadot Favorit Kate Middleton untuk Musim Panas</h5>
                <img src="./item/FASHION/fashion news/kate middleton.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-8 d-flex flex-column justify-content-center">
                <p>    Kate Middleton yang bergelar Princess of Wales tampak elegan saat dia membuka komunitas perumahan baru, Hope Street, di Southampton, Inggris, Selasa 27 Juni 2023. Ini telah dirancang dan dikembangkan oleh One Small Thing, sebuah badan amal dengan misi mendesain ulang sistem peradilan bagi perempuan dan anak-anak mereka. Putri Kate nampak mencuri perhatian dalam balutan gaun biru tua panjang bermotif polkadot putih, dengan model kerah gaya pelaut oleh Alessandra Rich, membuat pernyataan mode yang mungkin terlihat familier. Fiturnya yang paling menarik adalah lengan balonnya yang menyatu dan menciptakan dimensi pada korset dan rok yang pas. Selain model kerah unik ada detail ruffle di sepanjang garis leher dan fitur peplum yang meningkatkan tampilan. Dia pernah menggunakan gaun itu sekitar waktu yang sama tahun lalu ketika dia menghadiri Wimbledon bersama Pangeran William dan Pangeran George.</p>
            </div>
        </div>
        <div class="row py-5 my-5" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.1);">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                <h5 class="text-center">Fashion Gathering LIMOFF 2023, Suguhkan Wastra dan Budaya NTB di Jakarta</h5>
                <img src="./item/FASHION/fashion news/limoff.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-8">
                <p>    Indonesian Fashion Chamber IFC beserta Pemprov Nusa Tenggara Barat NTB dan Dekranasda NTB siap menggelar Lombok International Modest Fashion Festival LIMOFF pada 6 hingga 9 Juli 2023. Perhelatan ini merupakan event fesyen berskala internasional yang pertama kali digelar oleh NTB. Nantinya, gelaran ini akan merepresentasikan banyak kegiatan menarik seperti peragaan busana, lokakarya, kompetisi, talkshow, dan pameran berstandar internasional. Selama empat hari penyelenggaraannya, LIMOFF 2023 akan menghadirkan 150 desainer dan jenama fesyen baik lokal, nasional, hingga internasional. Saat ini kami mencoba inisiasi yang baru untuk diselenggarakan di Lombok. Karena sejauh ini NTB kan dikenal akan pantainya, Sirkuit Mandalika dan diharapkan LIMOFF bisa membawa perubahan pada industri modest dan gaya hidup, Demikian ujar Niken Zulkieflimansyah, Ketua Dekranasda NTB, Founder LIMOFF dalam konferensi persnya di Sarinah, Jakarta, baru-baru ini.</p>
            </div>
        </div>
        <div class="row py-5 my-5" style="box-shadow: 0 0 10px 5px rgba(0, 0, 0, 0.1);">
            <div class="col-lg-4 d-flex flex-column justify-content-center align-items-center">
                <h5 class="text-center">Debut Vernon 'SEVENTEEN' Sebagai Global Ambassador Kenzo di Ajang KENZO Spring-Summer 2024.</h5>
                <img src="./item/FASHION/fashion news/vernon.jpg" class="img-thumbnail" alt="...">
            </div>
            <div class="col-lg-8">
                <p>    Pengaruh Korean Wave di kancah internasional memang semakin melejit tinggi. Menyusul Mingyu 'SEVENTEEN', kini giliran Vernon yang terpilih menjadi global ambassador Kenzo, fashion brand mewah asal Paris. Terinspirasi dari gaya busana Asia, ia kemudian menggabungkannya dengan style busana Eropa. Dilansir wawancara eksklusif dengan Nigo dari laman Women’s Wear Daily, Kenzo juga merasa sangat bersemangat untuk bereksplorasi lewat kerja sama ini dan berharap bisa menjangkau lebih banyak lagi penggemar di seluruh dunia. Beberapa hari setelah kabar bahagia ini, Vernon langsung memulai debutnya dengan tampil di ajang KENZO Spring-Summer 2024. Sehari sebelum tiba di event tersebut, Vernon sudah mencuri perhatian dengan gaya kasualnya di airport dengan busana dari Kenzo, yaitu kaos, celana jeans hingga sneakers berwarna cokelat.</p>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
