<?php
    session_start();
    error_reporting(E_ALL & ~E_NOTICE);
    if(isset($_POST["logout"])){
        session_destroy();
        echo "<script>
                     alert('berhasil log out');
                     document.location.href = 'login.php';
                 </script>";
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bacasime+Antique&family=Caprasimo&family=Playfair+Display:wght@500&display=swap" rel="stylesheet">
    <script>
        function klik_login(){
            document.location.href = 'login.php';
        }
    </script>
    <style>
        .navbar-brand,
        .nav-link {
            color: white !important;
        }
        h1,h2,h3,h4,h5,h6{
            font-family: 'Caprasimo', 'cursive';
        }
        *{
            font-family: 'Times New Roman', serif;
            font-size:20px;
        }
    </style>
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark bg-secondary bg-body-tertiary mb-4">
    <div class="container">
        <a class="navbar-brand" href="./index.php"><h5>Vallberry Beauty</h5></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="menu.php">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Forum</a>
                </li>
            </ul>
            <div class="d-flex">
                <form action="" method="post">
                    <?php if(empty($_SESSION["username"])){?>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="p-2"><p class="h6 text-dark">Anonymous</p></div>
                            <button type="button" class="btn btn-outline-light" name="login" onclick="klik_login()">Log In</button>
                        </div>
                    <?php }else{?>
                        <div class="btn-group" role="group" aria-label="Basic example">
                            <div class="p-2"><a href="./profil.php" class="h6 text-light"><?= $_SESSION["username"] ?></a></div>
                            <button type="submit" class="btn btn-outline-light" name="logout">Log Out</button>
                        </div>
                    <?php }?>
                </form>
            </div>
        </div>
    </div>
</nav>


                 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>