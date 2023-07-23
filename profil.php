<?php 
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    require "function.php";
    $user_data = query("SELECT * FROM users WHERE username = '{$_SESSION['username']}'");
    // var_dump($user_data);
    if ( isset($_POST["simpan"])) {
        // var_dump($_POST);
        if(update($_POST) > 0){
            echo "<script>
                     alert('data sudah diupdte');
                     document.location.href = 'menu.php';
                 </script>";
                $_SESSION["username"] = $_POST['username'];
        } else {
            echo "<script>
                    alert('update gagal');
                     document.location.href = 'register.php';
                 </script>";
        }
     }
     if(isset($_POST["login"])){
        header("Location: login.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register | Vallberry Beauty</title>
    <style>
        body.bg-image{
            background-image: url('./img/bg-vbb.png');
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
    <nav class="navbar navbar-dark d-flex row justify-content-center">
        <h1 style="text-align: center;width:100%;color:white;letter-spacing:3px" class="col-lg-4">Profil</h1>
    </nav>
    <div class="container-fluid px-3 py-5 mx-auto" style="width:520px;border-radius:10px; height:fit-content; background-color: rgba(255,255,255,.8)">
        <!--  -->
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $user_data[0]['id']?>">
            <div class="row mb-3">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="inputUsername" value="<?= $user_data[0]["username"] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputUsia" class="col-sm-2 col-form-label">Usia</label>
                <div class="col-sm-10">
                <input type="text" name="usia" class="form-control" id="inputUsia" value="<?= $user_data[0]["usia"] ?>">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <?php if($user_data[0]["jenis_kelamin"]==="perempuan") {?>
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="perempuan" checked>
                        <?php } else {?>
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="perempuan" >
                        <?php }?>
                        <label class="form-check-label" for="gridRadios2">
                        Perempuan
                        </label>
                    </div>
                    <div class="form-check">
                        <?php if($user_data[0]["jenis_kelamin"]==="laki-laki") {?>
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="laki-Laki" checked>
                        <?php } else {?>
                            <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="laki-laki" >
                        <?php }?>
                        <label class="form-check-label" for="gridRadios3">
                        Laki-laki
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="inputNomer" class="col-sm-2 col-form-label">No. Telepon</label>
                <div class="col-sm-10">
                <input type="text" name="no_telp" class="form-control" id="inputNomer" value="<?= $user_data[0]["no_telp"] ?>">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-secondary btn-sm" name="simpan">Simpan</button>
        </form>
        <!--  -->
        
    </div>
    <?php include("template_footer.php") ?>
</body>
</html>