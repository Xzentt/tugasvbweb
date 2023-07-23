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

    if(isset($_POST["balas"])){
        if(reply($_POST)>0){
            echo "<script>
                     alert('balasan terkirim');
                     document.location.href = 'kontak.php';
                 </script>";
        }
    }

    if(isset($_POST["search_button"])){
        $datas = cari($_POST["search_text"]);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forum | Vallberry Beauty</title>
    <link rel="stylesheet" type="text/css" href="kontakk.css">
    <style>
        body.bg-image{
            background-image: url('./img/bg-konsul.jpg');
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
        <h2>Forum</h2>
        <div class="row">
            <div class="col-8">
                <?php foreach ($datas as $data) :?>
                    <div class="card mb-3">
                        <div class="card-body">
                            <h6 class="card-title ">Oleh : <?= $data['sender'] ?> - Pada : <?=$data["created"]?></h6>
                            <p class="card-text"><?= $data["content"] ?></p>
                            <h6 class="card-subtitle text-muted">Balasan :</h6>
                            <!-- balasan -->
                            <?php 
                                $replys = query("SELECT * FROM reply WHERE id_pesan = '{$data["id"]}'"); 
                            ?>
                            <!-- akhir balasan -->
                            <?php if(empty($replys)){?>
                                <p class="text-muted">~~~ belum terjawab ~~~</p>
                            <?php ?> 
                            <?php } else { 
                                foreach ($replys as $reply):    
                            ?>
                                <p><?= $reply["pengirim"]?> - <?= $reply["balasan"] ?></p>
                            <?php endforeach; }?>
                        </div>
                        <form action="" method="post" class="d-flex w-75 ms-4">
                            <input type="hidden" name="id_pesan" value="<?= $data["id"] ?>">
                            <input type="hidden" name="pembalas" value="<?= $_SESSION["username"] ?>">
                            <input type="text" name="balasan" class="form-control" id="inputEmail3" placeholder="Balas">
                            <button class="btn btn-success btn-sm ms-2" type="submit" name="balas" style="height: 45px;">Send</button>
                        </form>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="col-4">
                <form action="" method="post">
                    <h6 class="col">Pencarian</h6>
                    <div class="row">
                        <div class="col-lg-8">
                            <input type="text" name="search_text" id="search_text" class="form-control" placeholder="Masukkan kata kunci">
                        </div>
                        <div class="col-lg-4">
                            <button class="btn btn-success" name="search_button">Cari</button>
                        </div>
                    </div>
                </form>
                <hr>
                <form action="" method="post">
                    <div class="form-floating">
                        <input type="text" name="username" id="username" class="form-control" value="<?= $_SESSION['username'] ?>">
                        <!-- <textarea name="username" class="form-control" placeholder="username" id="floatingTextarea" value=""></textarea> -->
                        <label for="username">Pengirim</label>
                    </div>
                    <div class="form-floating">
                        <textarea name="content" class="form-control" placeholder="Isi Pesan" id="floatingTextarea"></textarea>
                        <label for="floatingTextarea">Isi Pesan</label>
                    </div>
                    <button class="btn btn-success" type="submit" name="kirim">Kirim</button>
                </form>
            </div>
        </div>
    </main>

    <?php include("template_footer.php") ?>
</body>
</html>
