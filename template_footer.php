<!DOCTYPE html>
<html lang="en">
<head>
   
    <style>
        #floating-icon {
            position: fixed;
            bottom: 50px;
            right: 50px;
            z-index: 9999;
            cursor: pointer;
        }

        #floating-icon img {
            width: 100px;
            height: 100px;
            filter: drop-shadow(5px 5px 10px #0e7500)
        }

        .footer {
            left: 0;
            bottom: 0;
            width: 100%;
            text-align: center;
            padding: 20px 0 0 0;
        }

        @media only screen and (max-width: 600px) {
            #floating-icon img {
                width: 75px;
                height: 75px;
                filter: drop-shadow(5px 5px 7px #0e7500)
            }
        }
        
    </style>
</head>
<body>
    <?php if(!empty($_SESSION)){ ?>
        <div id="floating-icon" onclick="window.open('https://wa.me/62895329735850/?text=Saya%20atas%20nama%20<?php echo urlencode($_SESSION["username"]); ?>%20ingin%20melakukan%20konsultasi', '_blank')">
            <img src="./item/pop up.png" alt="Floating Icon">
        </div>
    <?php }?>
    <div class="space" style="min-height:100px !important; "></div>
    <div class="footer" style="margin-bottom:-20px;">
        <footer>
            <p>Hak Cipta &copy; 2023 Vallberry Beauty</p>
        </footer>
</body>
</html>