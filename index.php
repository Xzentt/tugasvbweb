<!DOCTYPE html>
<html>
<head>
    <title>Vallberry Beauty</title>
    <!-- Link ke file CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap-icons.min.css">
    <!-- CSS Khusus -->
    <style>
        .bg-atas{
            height: 100vh;
            background-image: url('./img/bg-atas.png');
            background-position: center;
            background-size: fill;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        @keyframes heartbeat {
            0% { transform: scale(1); }
            25% { transform: scale(1.1); }
            50% { transform: scale(1); }
            75% { transform: scale(1.1); }
            100% { transform: scale(1); }
        }

        .bg-atas h3 {
            animation: heartbeat 2s infinite;
            text-shadow: 0 0 10px white;
        }

        .bg-bawah {
            height: 100vh;
            background-image: url('./img/bg-index.jpg');
            background-position: center;
            background-size: fill;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            text-align: center;
        }

        .content {
            min-width: 100vw;
            margin: 30px 0 30px 0;
            padding-bottom: 50px;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            background-color: rgba(0,0,0,0.8);
        }

        .container{
            flex: 1;
        }

    </style>
    <script>
        function klik_menu(){
            document.location.href = 'register.php';
        }

        function klik_login(){
            document.location.href = 'login.php';
        }
    </script>
</head>
<body style="overflow-x:hidden;">
    <div class="bg-atas">
        <i class="bi bi-arrow-down-circle"></i>
        <h3>scroll ke bawah untuk melanjutkan</h3>
    </div>
    <div class="bg-bawah" >
        <div class="content">
            <!-- Konten HTML lainnya -->
            <div class="d-flex" style="height:90vh;">
                <div class="container d-flex flex-column justify-content-center align-items-center text-center">
                    <h6>Klik tombol dibawah untuk login/sign in dan mengakses beberapa fitur tambahan</h6>
                    <button type="button" class="btn btn-success" onclick="klik_login()">Log In</button>
                </div>
                <div class="" style="width:1px;background-color:white; margin:90px 0 90px 0;"></div>
                <div class="container d-flex flex-column justify-content-center align-items-center text-center">
                    <h6>Klik tombol dibawah untuk <br>Melakukan Registrasi Pengguna Baru</h6>
                    <button type="button" class="btn btn-success" onclick="klik_menu()">Sign Up</button>
                </div>
            </div>
            <footer class="footer">
                <div class="container" >
                    <p>Hak Cipta &copy; 2023 Vallberry Beauty</p>
                </div>
            </footer>
        </div>
    </div>

    

    <!-- Link ke file JavaScript Bootstrap (opsional) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
