<?php

    $conn = mysqli_connect("172.27.0.3","root","password","vallberry");

    function query($query){
        global $conn;
        $result = mysqli_query($conn,$query);
        $rows = [];
        while($row = mysqli_fetch_assoc($result)){
            $rows[] = $row;
        }
        return $rows;
    }

    function register($data){
        global $conn;
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $usia = strtolower(stripslashes($data["usia"]));
        $jenis_kelamin = strtolower(stripslashes($data["jenis_kelamin"]));
        $no_telp = strtolower(stripslashes($data["no_telp"]));

        if($username==="admin"){
            echo "<script>
                     alert('tidak bisa menggunakan username admin');
                 </script>";
            return false;
        }

        if($username==="" || $password==="" || $jenis_kelamin==="" ){
            echo "<script>
                     alert('isi seluruh kolom dengan benar');
                 </script>";
            return false;
        }

        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                     alert('username telah tersedia');
                 </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "INSERT INTO users VALUES (NULL,'$username','$usia','$jenis_kelamin','$no_telp','$password',NULL)";
        mysqli_query($conn, $query);
        return mysqli_affected_rows($conn);
    }

    function update($data){
        global $conn;
        $id = $data["id"];
        $username = strtolower(stripslashes($data["username"]));
        $password = mysqli_real_escape_string($conn,$data["password"]);
        $usia = strtolower(stripslashes($data["usia"]));
        $jenis_kelamin = strtolower(stripslashes($data["jenis_kelamin"]));
        $no_telp = strtolower(stripslashes($data["no_telp"]));

        $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");
        if(mysqli_fetch_assoc($result)){
            echo "<script>
                     alert('username telah tersedia');
                 </script>";
            return false;
        }

        if($password===""){
            echo "<script>
                     alert('password kosong');
                 </script>";
            return false;
        }

        $password = password_hash($password, PASSWORD_DEFAULT);
        $query = "UPDATE users SET username='$username', usia='$usia', jenis_kelamin='$jenis_kelamin', no_telp='$no_telp', password='$password' WHERE id='$id'";
        mysqli_query($conn,$query);

        return mysqli_affected_rows($conn);
    }

    function confirm($data){
        global $conn;
        $username = $data["username"];
        mysqli_query($conn,"UPDATE users SET payment_confirm = 1 WHERE username = '$username'");

        return mysqli_affected_rows($conn); 
    }

    function hapus($data){
        global $conn;
        $id = $data['id'];
        mysqli_query($conn, "DELETE FROM users WHERE id = '$id'");

        return mysqli_affected_rows($conn); 
    }

    // function untuk konsul dan reply

    function send($data){
        global $conn;
        $username = $data["username"];
        $content = $data["content"];
        $query = "INSERT INTO consultations VALUES (NULL, '$username', NOW(), '$content', NULL)";
        mysqli_query($conn,$query);
        return mysqli_affected_rows($conn);
    }

    function reply($data){
        global $conn;
        $id_pesan = $data["id_pesan"];
        $balasan = $data["balasan"];
        $pembalas = $data["pembalas"];

        $query = "INSERT INTO reply VALUES (NULL, '$id_pesan', '$balasan', '$pembalas')";
        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function cari($input){
        $query = "SELECT * FROM consultations WHERE content LIKE '%$input%' OR sender LIKE '%$input%' ORDER BY created DESC";
        return query($query);
    }
    
    // function balas($data){
    //     global $conn;
    //     $id = $data["id"];
    //     $balasan = $data["balasan"];
    //     mysqli_query($conn, "UPDATE consultations SET reply = '$balasan' WHERE id = '$id'");

    //     return mysqli_affected_rows($conn);
    // }
?>