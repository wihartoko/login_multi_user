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

    <title>Dashboard admin</title>
</head>

<body>
    <div class="container">
        <div class="jumbotron bg-primary text-light">
            <!--  -->
            <h1 class="display-6">Selamat Datang <b> <?= $_SESSION['email'] ?></b></h1>
            <p class="lead"> <b> <?= $_SESSION['level'] ?> </b></p>
            <hr class="my-4">
            <p>isi dahsboard</p>
            <a class="btn btn-danger btn-lg" href="logout.php" role="button">Logout</a>
        </div>
        <!-- card ganti password-->
        <div class="card mt-3">
            <div class="card-header bg-primary">
                ganti password
            </div>
            <form action="ubah_password.php" method="post">
                <input type="hidden" class="form-control" name="email" value="<?= $_SESSION['email'] ?>">
                <div class="form-group mb-3">
                    <label for="password_lama" class="form-label">masukan password lama</label>
                    <input type="password" class="form-control" name="password_lama" id="password_lama" placeholder="masukan password lama anda" required>
                </div>
                <div class="form-group mb-3">
                    <label for="password_baru" class="form-label">masukan password baru</label>
                    <input type="password" class="form-control" name="password_baru" id="password_baru" placeholder="masukan password baru anda" required>
                </div>
                <div class="form-group mb-3">
                    <label for="kon_password_baru" class="form-label">konfirmasi password baru</label>
                    <input type="password" class="form-control" name="kon_password_baru" id="kon_password_baru" placeholder="konfirmasi password baru anda" required>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">reset</button>
            </form>

        </div>
    </div>
</body>

</html>