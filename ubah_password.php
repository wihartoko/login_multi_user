<?php
include "koneksi.php";
//  enkripsiinputan password lama
$password_lama = md5($_POST['password_lama']);

// panggil email
$email = $_POST['email'];
// uji jika lama sesuai
$tampil = mysqli_query($conn, "SELECT * FROM tuser WHERE email = '$email' and password = '$password_lama'");
$data = mysqli_fetch_array($tampil);
// jika data ditemukan maka password sesuai
if ($data) {
    // uji jika password lama dan baru sesuai
    $password_baru = $_POST['password_baru'];
    $kon_password_baru = $_POST['kon_password_baru'];
    if ($password_baru == $kon_password_baru) {
        // proses ganti password
        // enkripsi password baru
        $pass_ok = md5($kon_password_baru);
        $ubah = mysqli_query($conn, "UPDATE tuser set password = '$pass_ok' WHERE id = '$data[id]'");
        if ($ubah) {
            echo "<script>alert ('password anda berhasil diubah'); document.location='home_admin.php'</script>";
        }
    } else {
        echo "<script>alert ('password lama dan password baru anda tidak sesuai'); document.location='home_admin.php'</script>";
    }
} else {
    echo "<script>alert ('password lama anda tidak sesuai'); document.location='home_admin.php'</script>";
}
