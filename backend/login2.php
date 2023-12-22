<?php
require "../config/db.php";

if(isset($_POST['submit'])){

    $email = $_POST['email'];
    $password = $_POST['password'];

    $user = mysqli_query ($db, "SELECT FROM tbl_user WHERE email = $email");
}
?>