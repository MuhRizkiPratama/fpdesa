<?php

session_start();

require '../config/db.php';

if(isset($_POST['submit'])) {

    $nik = $_POST['nik'];
    $tanggal_lahir = $_POST['tanggallahir'];

    $users = mysqli_query($db, "SELECT * FROM tbl_user WHERE nik_tu = '$nik'");
    if(mysqli_num_rows($users) > 0) {
        $data = mysqli_fetch_assoc($users);
        
        if(password_verify($tanggal_lahir, $data['tanggal_lahir_tu'])) {

            //otorisasi
            $_SESSION['nik_tu'] = $data['nik_tu'];
            $_SESSION['role_tu'] = $data['role_tu'];

            if($_SESSION['role_tu'] == 'admin') {
                header('Location:../datakependudukan/admin.php');
            } else {
                echo "pages tidak ditemukan.";
            }

        } else {
            echo "Password salah";
            die;
        }

    } else {
        echo "NIK anda salah!";
        die;
    }
}
?>