<?php
include "koneksi.php";

$pass = md5($_POST['password']);
$email =  mysqli_escape_string($conn, $_POST['email']);
$password =  mysqli_escape_string($conn, $pass);
$level = mysqli_escape_string($conn, $_POST['level']);

// cek username terdaftar/ gak
$cek_user = mysqli_query($conn, "SELECT * FROM tuser WHERE email='$email' and level='$level' ");
$user_valid = mysqli_fetch_array($cek_user);

// uji jika email terdaftar
if ($user_valid) {
    // jika email terdaftar dan password terdaftar
    if ($password == $user_valid['password']) {
        // jika password sesuai buat session
        session_start();
        $_SESSION['email'] = $user_valid['email'];
        $_SESSION['level'] = $user_valid['level'];
        // uji level user
        if ($level == "pegawai") {
            header('location:home_pegawai.php');
        } elseif ($level == "operator") {
            header('location:home_operator.php');
        } elseif ($level == "administrator") {
            header('location:home_admin.php');
        }
    } else {
        echo "<script>alert ('maaf login gagal password tidak sesuai');
        document.location='index.php'</script>";
    }
} else {
    echo "<script>alert ('maaf login gagal email tidak terdaftar');
        document.location='index.php'</script>";
}
