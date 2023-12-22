<?php

session_start();

require '../config/db.php';

if(isset($_POST['submit'])){

    $nama = $_POST['nama_tu'];
    $email = $_POST['email_tu'];
    $password = $_POST['password_tu'];
    $confirm = $_POST['confirm_tu'];

    if($confirm != $password) {
        echo "Password tidak sesuai.";
        die;
    }

    $usedEmail = mysqli_query($db, "SELECT email_tu FROM tbl_user WHERE email_tu = '$email'");
    if(mysqli_num_rows($usedEmail) > 0) {
        echo "Email sudah digunakan.";
        die;
    }

    $password = password_hash($password,PASSWORD_DEFAULT);
    $created_at = date('Y-m-d H:i:s',time());

    $user = mysqli_query($db, "INSERT INTO tbl_user (id_tu, name_tu, email_tu, password_tu, role_tu) VALUES ('','$nama', '$email', '$password', 'admin')");

    $getUserData = mysqli_query($db, "SELECT name_tu, role FROM tbl_user WHERE email = '$email'");
    
    $sessionData = mysqli_fetch_assoc($getUserData);

    $_SESSION['name'] = $sessionData ['nama'];
    $_SESSION['role'] = $sessionData ['role'];

    header('Location:../login.php');
}

?>