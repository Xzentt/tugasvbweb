<?php
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    $conn = mysqli_connect("172.27.0.3","root","password","vallberry");
    if(isset($_POST["login"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        if(($username==="admin" && $password==="admin") or ($username==="admin2" && $password==="admin2") ){
            $_SESSION["username"] = "admin";
            header("Location: admin.php");
            exit();
        }
        $query = "SELECT * FROM users WHERE username = '$username'";
        $result = mysqli_query($conn, $query);
        if(mysqli_num_rows($result)===1){
            $row = mysqli_fetch_assoc($result);
            if(password_verify($password, $row["password"])){
                $_SESSION["username"]=$row["username"];
                header("Location: menu.php");
                exit();
            }
        }
        $error = true;
    }
    if(isset($_POST["register"])){
        header("Location: register.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Vallberry Beauty</title>
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
        <h1 style="text-align: center;width:100%;color:white;letter-spacing:3px" class="col-lg-4">Login</h1>
    </nav>
    <?php if(isset($error)):?>
        <div class="container mt-2">
            <p style="color:red;font-weight:bold;font-family:Verdana, Geneva, Tahoma, sans-serif">Username atau password salah.</p>
        </div>
    <?php endif ?>
    <div class="container-fluid px-3 py-5 mx-auto" style="width:520px;border-radius:10px; height:fit-content; background-color: rgba(255,255,255,.8)">
        <!--  -->
        <form method="post">
            <div class="row mb-3">
                <label for="inputEmail3" class="col-sm-2 col-form-label">Username</label>
                <div class="col-sm-10">
                <input type="text" name="username" class="form-control" id="inputEmail3">
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword3" class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-10">
                <input type="password" name="password" class="form-control" id="inputPassword3">
                </div>
            </div>
            <button type="submit" class="btn btn-outline-secondary btn-sm" name="login">Login</button>
            <span style="width: 10px;"></span>
            <button type="submit" class="btn btn-outline-secondary btn-sm" name="register">Register</button>
        </form>
        <!--  -->
        
    </div> 
    <?php include("template_footer.php") ?>
</body>
</html>