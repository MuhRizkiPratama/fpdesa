<?php
//Koneksi ke database
$db = mysqli_connect("localhost", "root", "", "db_desa");

if(mysqli_connect_errno()){
    echo "failed connect to mysql ".mysqli_connect_error(); 
}

