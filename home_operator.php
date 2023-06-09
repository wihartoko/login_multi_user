<?php
session_start();
// agar sebelum login tidak bisa masuk
if (empty($_SESSION['email']) or empty($_SESSION['level'])) {
    echo "<script>alert('anda harus login terlebih dahulu');document.location='index.php'</script>";
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Dashboard Pegawai</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron bg-success text-light">
            <!--  -->
            <h1 class="display-6">Selamat Datang <b> <?= $_SESSION['email'] ?></b></h1>
            <p class="lead"> <b> <?= $_SESSION['level'] ?> </b></p>
            <hr class="my-4">
            <p>isi dahsboard</p>
            <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
        </div>
    </div>
</body>

</html>