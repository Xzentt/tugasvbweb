<?php 
    require "function.php";

    if ( isset($_POST["tambah"])) {
        // var_dump($_POST);
        if(register($_POST) > 0){
            echo "<script>
                     alert('user telah ditambahkan');
                     document.location.href = 'admin.php';
                 </script>";
        } else {
            echo "<script>
                     alert('Penambahan gagal');
                     document.location.href = 'admin_tambah.php';
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
        <h1 style="text-align: center;width:100%;color:white;letter-spacing:3px" class="col-lg-4">Tambah User</h1>
    </nav>
    <div class="container-fluid px-3 py-5 mx-auto" style="width:520px;border-radius:10px; height:fit-content; background-color: rgba(255,255,255,.8)">
        <!--  -->
        <form action="" method="post">
            <div class="row mb-3">
                <label for="inputUsername" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="inputUsername">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputUsia" class="col-sm-2 col-form-label">Usia</label>
                <div class="col-sm-10">
                <input type="text" name="usia" class="form-control" id="inputUsia">
                </div>
            </div>
            <fieldset class="row mb-3">
                <legend class="col-form-label col-sm-2 pt-0">Jenis Kelamin</legend>
                <div class="col-sm-10">
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios2" value="perempuan">
                        <label class="form-check-label" for="gridRadios2">
                        Perempuan
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="jenis_kelamin" id="gridRadios3" value="laki-laki">
                        <label class="form-check-label" for="gridRadios3">
                        Laki-laki
                        </label>
                    </div>
                </div>
            </fieldset>
            <div class="row mb-3">
                <label for="inputNomer" class="col-sm-2 col-form-label">No. Telepon</label>
                <div class="col-sm-10">
                <input type="text" name="no_telp" class="form-control" id="inputNomer" value="+62">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-secondary btn-sm" name="tambah">Tambahkan</button>
        </form>
        <!--  -->
        
    </div>
    <?php include("template_footer.php") ?>
</body>
</html>