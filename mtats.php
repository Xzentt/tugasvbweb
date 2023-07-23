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
    <title>Makeup Tips & Trick | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="mtatsc.css">
    <style>
        body.bg-image{
            background-image: url('./img/bg-mu.jpg');
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-position: center;
            background-size: cover;
        }
        main{
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

    <main>
        <h2 class="text-center">MAKE - UP Tips And Tricks</h2>
        <div class="container py-5">
        <p>Sebagai seorang konten creator di bidang makeup, berikut ini adalah beberapa tips dan trik yang bisa kamu terapkan:</p>
        <ul>
            <li>Mulailah dengan kulit yang bersih dan terhidrasi. Pastikan wajahmu telah dibersihkan dengan baik sebelum memulai riasan. Gunakan pelembap yang sesuai dengan jenis kulitmu sehingga foundation dan produk lainnya bisa menempel dengan baik.</li>
            
            <li>Menggunakan primer sebelum aplikasi foundation. Primer ini berfungsi untuk menyamarkan pori-pori, mengontrol minyak berlebih, dan membuat makeup lebih tahan lama.</li>
            
            <li>Pilihlah foundation yang cocok dengan jenis dan warna kulitmu. Gunakan shade yang tepat dan aplikasikan dengan memberikan sedikit-sedikit di seluruh wajah, kemudian ratakan dengan spons atau kuas yang sesuai.</li>
            
            <li>Selalu ratakan makeup dengan baik. Pastikan tidak ada garis atau noda yang terlihat dan usahakan memblendkan dengan baik agar hasil riasan terlihat natural.</li>
            
            <li>Gunakan concealer untuk menyamarkan ketidaksempurnaan seperti jerawat, lingkaran hitam di bawah mata, atau bekas luka. Aplikasikan dengan lembut dan blend dengan baik.</li>
            
            <li>Teknik baking bisa membantu menjaga makeup agar tahan lama. Setelah mengaplikasikan concealer, gunakan bedak loose yang lembut dan biarkan selama beberapa menit sebelum membaurkannya dengan kuas.</li>
            
            <li>Gunakan eyeshadow primer sebelum mengaplikasikan eyeshadow. Ini akan membantu eyeshadow lebih tahan lama dan mencegah lipatan di kelopak mata.</li>
            
            <li>Aplikasikan eyeliner dan maskara dengan hati-hati. Gunakan teknik yang tepat agar garisnya presisi dan bulu mata terlihat lebih panjang dan tebal.</li>
            
            <li>Bermainlah dengan warna di area bibir. Gunakan lip liner untuk merapihkan bentuk bibir dan pilih lipstik dengan warna yang sesuai dengan selera dan tampak harmonis dengan riasanmu.</li>
            
            <li>Jangan lupa setting spray untuk mengunci riasan dan memastikan agar makeup tahan lebih lama.</li>
        </ul>
        
        <p>Terakhir, jangan takut untuk bereksperimen dan temukan gaya yang sesuai dengan kepribadian dan karakteristikmu. Semoga tips dan trik di atas bisa membantu kamu sebagai seorang konten creator di bidang makeup!</p>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
