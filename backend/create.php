<?php

// Koneksi Ke Database
$db = mysqli_connect ("localhost", "root", "", "db_desa");

if(isset($_POST['submit'])){

    // Ambil data dari tiap elemen dalam form
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

    // Query Insert Data(Menambah Data)
    $tambah = "INSERT INTO tbl_m_ktp VALUES ('$id', '$nik', '', '$nama', '$jenis_kelamin', '$golongan_darah', '$tempat_lahir', '$tanggal_lahir', '$umur', '$pendidikan', '', '', '', '$alamat', '', '', '', '', '', '', '', '', '', '', '')";
    mysqli_query($db, $tambah);

    // Jika Berhasil Kembali Ke Pages Data Masyarakat
    header("location:../datakependudukan/admin.php");

    //Jika Tambah data sukses dilakukan
    if($tambah) {
        echo "<script>alert('Data Berhasil Ditambahkan');</script>";
    } else {
        echo "<script>alert('Data Gagal Ditambahkan!');</script>";
    }
}
?>