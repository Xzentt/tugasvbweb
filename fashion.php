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
    <title>Fashion | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="makeup.css">
    <style>
        body.bg-image{
            background-image: url('./img/bg-fasion.jpg');
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
            <h2 class="text-center">Get the latest fashion and style for women in Indonesia</h2>
            <article>
                <h3>Pengertian</h3>
                <p> Fashion adalah sebagaian dari gaya berpakaian, aksesori, dan produk-produk penampilan yang terkait dengan budaya dan tren tertentu. 
                    Fashion juga merujuk pada industri yang menghasilkan dan mempromosikan pakaian dan aksesori yang inovatif dan trendy.
                    Fashion juga mencakup cara orang memilih, mengkoordinasikan, dan mengenakan pakaian mereka untuk mencerminkan kepribadian dan preferensi mereka. 
                    Hal ini melibatkan penggunaan bahan, warna, pola, desain, dan gaya yang berbeda-beda.
                    Selain itu, fashion juga melibatkan siklus tren, di mana desainer dan merek memperkenalkan koleksi baru pada setiap musim atau tahun. 
                    Tren dipengaruhi oleh faktor-faktor seperti selebritas, budaya populer, perkembangan teknologi, dan perubahan sosial.</p>
            </article>
            <article>
                <p>Fashion juga memiliki peran yang signifikan dalam masyarakat dan budaya. Hal ini dapat mengekspresikan identitas pribadi, status sosial, dan pengaruh dalam komunitas tertentu. 
                    Fashion juga dapat dianggap sebagai bentuk seni yang menggabungkan desain, estetika, dan kreativitas.Penting untuk diingat bahwa fashion adalah subjektif dan terus berubah seiring waktu. 
                    Setiap individu memiliki gaya dan preferensi yang unik, dan dapat melibatkan interpretasi dan eksperimen dengan tren yang ada.</p>

            <h3>Kategori:</h3>
            <ul class="menu-list">
                <li><a style="text-decoration:none;" href="ts.php">Trending Styles</a></li>
                <li><a style="text-decoration:none;" href="oi.php">Outfit Inspiration</a></li>
                <li><a style="text-decoration:none;" href="fn.php">Fashion News</a></li>
            </ul>
        </main>    
           
    <?php include("template_footer.php") ?>
</body>
</html>
