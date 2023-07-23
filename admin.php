<?php 
    error_reporting(E_ALL & ~E_NOTICE);
    require "function.php";
    session_start();
    $datas = query("SELECT * FROM users ORDER BY username ASC");
    $consultaions = query("SELECT * FROM consultations WHERE reply IS NULL");
    if(!$_SESSION["username"]){
        header("Location: login.php");
    }
    if(isset($_POST["logout"])){
        session_destroy();
        header("Location: login.php");
    }

    // if(isset($_POST["confirm"])){
    //     if(confirm($_POST) > 0){
    //         echo "<script>
    //                  alert('payment confirmed');
    //                  document.location.href = 'admin.php';
    //              </script>";
    //     }else{
    //         echo "<script>
    //                  alert('confirmation fail');
    //                  document.location.href = 'admin.php';
    //              </script>";
    //     }
    // }

    if(isset($_POST["balas"])){
        if(balas($_POST) > 0){
            echo "<script>
                     alert('jawaban terkirim');
                     document.location.href = 'admin.php';
                 </script>";
        }else{
            echo "<script>
                     alert('jawaban gagal dikirim');
                     document.location.href = 'admin.php';
                 </script>";
        }
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Vallberry Beauty</title>
    <!-- Tambahkan link CSS Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <h4 class="text-center">Users</h4>
            </div>
            <div class="col-lg-4 d-flex justify-content-center">
                <button class="btn btn-success" onclick="document.location.href = 'admin_tambah.php'">Tambah User</button>
            </div>
        </div>
        <div class="row ">
            <div class="col-2 text-center"><h6>Username</h6></div>
            <div class="col-2 text-center"><h6>Usia</h6></div>
            <div class="col-2 text-center"><h6>Jenis Kelamin</h6></div>
            <div class="col-2 text-center"><h6>No. Telp</h6></div>
            <div class="col-4 text-center"><h6>Action</h6></div>
        </div>
    
        <?php foreach ($datas as $data) :?>
            <div class="row ">
                <div class="col text-center"><p><?= $data["username"] ?></p></div>
                <div class="col text-center"><p><?= $data["usia"] ?></p></div>
                <div class="col text-center"><p><?= $data["jenis_kelamin"] ?></p></div>
                <div class="col text-center"><p><?= $data["no_telp"] ?></p></div>
                <div class="col text-center">
                    <button class="btn btn-success" onclick="location.href='https://wa.me/<?= $data["no_telp"] ?>'">Hubungi</button>
                </div>
                <div class="col text-center">
                    <button onclick="location.href='admin_edit.php?id=<?= $data['id'] ?>'" class="btn btn-success">Edit</button>
                    <button onclick="location.href='hapus_user.php?id=<?= $data['id'] ?>'" class="btn btn-danger">Hapus</button>
                </div>
                
            </div>
        <?php endforeach ?>   
    </div>

    <!-- <div class="container">
      <h4 class="text-center">Menunggu Balasan</h4>
      <?php if(empty($consultaions)){?>
            <h2 class="text-muted text-center">Tidak Ada Antrian</h2>
        <?php }?>
      <?php foreach ($consultaions as $consultaion) :?>

            <div class="card my-3">
                <div class="card-body">
                    <h6 class="card-title ">Oleh : <?= $consultaion['sender'] ?> - Pada : <?=$consultaion["created"]?></h6>
                    <p class="card-text"><?= $consultaion["content"] ?></p>
                    <h6 class="card-title">Balas : </h6>
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $consultaion['id']?>">
                        <textarea class="w-75" name="balasan" type="text" ></textarea>
                        <button class="btn btn-success mb-5" type="submit" name="balas">Kirim Balasan</button>
                    </form>
                </div>
            </div>
        <?php endforeach ?> 
    </div> -->

    <?php include("template_footer.php")?>
    <!-- Tambahkan script JS Bootstrap jika diperlukan -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
