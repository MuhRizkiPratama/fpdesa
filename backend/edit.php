<?php
//Konek ke database
require "../config/db.php";

if(isset($_GET['id'])){
    $id = $_GET['id'];

    $result = mysqli_query($db, "SELECT * FROM tbl_m_ktp WHERE id='$id'");
    $row = mysqli_fetch_assoc ($result);
}
if(isset($_POST['submit'])){

    // Menambah data ke tbl_m_ktp
    $id = $_POST['id'];
    $nik = $_POST['nik'];
    $nama = $_POST['nama'];
    $jenis_kelamin = $_POST['jeniskelamin'];
    $golongan_darah = $_POST['golongandarah'];
    $tempat_lahir = $_POST['tempatlahir'];
    $tanggal_lahir = $_POST['tanggallahir'];
    $umur = $_POST['umur'];
    $pendidikan = $_POST['pendidikan'];
    $alamat = $_POST['alamat'];

    $edit = "UPDATE tbl_m_ktp SET id_tmk='', nik_tmk='$nik', nama_tmk='$nama', jk_tmk='$jenis_kelamin', golongan_darah_tmk='$golongan_darah', tempat_lahir_tmk='$tempat_lahir', tanggal_lahir_tmk='$tanggal_lahir', umur_tmk='$umur', pendidikan_tmk='$pendidikan' alamat_tmk='$alamat'";
    mysqli_query($db, $edit);

    if($edit){
        header ("Location:../datakependudukan/admin.php");
    }
}
?>