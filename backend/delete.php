<?php
require "../config/db.php";

if(isset($_GET['id_tmk'])){
    $id = $_GET['id_tmk'];

    $delete = "DELETE FROM tbl_m_ktp WHERE id_tmk=$id";
    $result = mysqli_query($db, $delete);

    if($result){
        echo "Data berhasil dihapus";
    } else {
        echo "Data gagal dihapus";
    }
}
?>