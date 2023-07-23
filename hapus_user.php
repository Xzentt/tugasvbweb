<?php 
    error_reporting(E_ALL & ~E_NOTICE);
    session_start();
    require "function.php";
    
    if(hapus($_GET) > 0){
        echo "<script>
                    alert('user telah dihapus');
                    document.location.href = 'admin.php';
                </script>";
    } else {
        echo "<script>
                alert('hapus gagal');
                    document.location.href = 'admin.php';
                </script>";
    }
     

?>