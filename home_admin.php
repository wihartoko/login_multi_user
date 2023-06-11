<?php
include "../koneksi.php";
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Produksi</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../admin.css">
</head>

<body>
    <div class="container">
        <div class="jumbotron">
            <!--  -->
            <div class="text-end"><a class="btn btn-danger btn-lg mt-5" href="../logout.php" role="button">Logout</a></div>
            <h1 class="lead">Selamat Datang <b> <?= $_SESSION['email'] ?></b></h1>
            <p class="lead"> <b> <?= $_SESSION['level'] ?> </b></p>
            <hr class="my-4">

            <!doctype html>
            <html lang="en">

            <body>
                <h3 class="text-uppercase text-center mt-4">production proccess</h3>
                <h3 class="text-uppercase text-center">pt mobat mabit golet duit</h3>
                <hr class="mb-5">


                <div class="container ">
                    <h4>Main Menu</h4>

                    <div class="kotak">
                        <h3><a href="../admin/data_produksi_admin.php"> <button class="btn btn-light">Data Produksi</button></a></h3>
                    </div>
                    <div class="kotak">
                        <h3><a href="../admin/data_riject_admin.php"> <button class="btn btn-light">Data Riject</button></a></h3>
                    </div>
                    <div class="kotak">
                        <h3><a href="../admin/data_laporan_admin.php"> <button class="btn btn-light">Data Laporan Mesin</button></a></h3>
                    </div>
                    <div class="kotak">
                        <h3><a href="#"> <button class="btn btn-light">About</button></a></h3>
                    </div>
                </div>

                <!-- close container -->
                <!-- bootstrap js -->
                <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
                </script>
            </body>

            </html>

        </div>
    </div>
</body>

</html>