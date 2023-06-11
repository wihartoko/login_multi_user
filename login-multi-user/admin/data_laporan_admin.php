<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {
    mysqli_query($conn, "insert into mesin set

    tanggal = '$_POST[tanggal]',
    knife1 = '$_POST[knife1]',
    knife2 = '$_POST[knife2]',
    knife3 = '$_POST[knife3]',
    knife4 = '$_POST[knife4]',
    knife5 = '$_POST[knife5]',
    watrejet = '$_POST[waterjet]',
    doubling = '$_POST[doubling]'
    
    ");
    echo "data barang baru telah tersimpan";
    echo "<meta http-equiv=refresh content=2;URL='index.php'>";
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Produksi</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <!-- bootstrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold " href="#"> Bakul Pak Wie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../admin/home_admin.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_produksi_admin.php">Data Produksi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_riject_admin.php">Data Reject</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_laporan_admin.php">Data Laporan Mesin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>



                </ul>
            </div>
        </div>
    </nav>

    <!-- close navbar -->


    <h3 class="text-uppercase text-center">production proccess</h3>
    <h3 class="text-uppercase text-center">pt mobat mabit golet duit</h3>
    <hr>
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-header bg-warning text-secondary">
                        Data Laporan Harian mesin
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>No</th>
                                <th class="text-center">Date</th>
                                <th>Knife1</th>
                                <th>Knife2</th>
                                <th>Knife3</th>
                                <th>Knife4</th>
                                <th>Knife5</th>
                                <th>Waterjet</th>
                                <th>Doubling</th>
                                <th colspan="2" class="text-center">Aksi</th>
                            </tr>
                            <!-- menampilkan data barang -->
                            <?php
                            include "../koneksi.php";
                            $no = 1;
                            $ambildata = mysqli_query($conn, "select * from mesin");
                            while ($tampil = mysqli_fetch_array($ambildata)) {
                                echo "
                            <tr>
                                <td>$no</td>
                                
                                <td>$tampil[tanggal]</td>
                                <td>$tampil[knife1]</td>
                                <td>$tampil[knife2]</td>
                                <td>$tampil[knife3]</td>
                                <td>$tampil[knife4]</td>
                                <td>$tampil[knife5]</td>
                                <td>$tampil[waterjet]</td>
                                <td>$tampil[doubling]</td>
                                <td><a href='?kode=$tampil[id_mesin]'> <input type='submit'  value='hapus' class='btn btn-danger'> </a> </td>
                                <td><a href='ubah_laporan.php?kode=$tampil[id_mesin]'> <input type='submit' value='Edit' class='btn btn-warning'> </a> </td>
                                </tr>";
                                $no++;
                            }
                            ?>
                        </table>
                        <p class="text-center">
                            <input type="button" value="Export Excel" onclick="window.open('excel_laporan.php') ">
                        </p>
                        <!-- hapus data -->
                        <?php
                        if (isset($_GET['kode'])) {
                            mysqli_query($conn, "delete from mesin where id_mesin= '$_GET[kode]'");
                            echo "data telah terhapus";
                            echo "<meta http-equiv=refresh content=2;URL='data_laporan.php'>";
                        }
                        ?>
                        <!-- close hapus data -->

                    </div>
                    <div class="card-footer bg-warning text-end text-light ">
                        Created By Wihartoko
                    </div>
                </div>


            </div>
        </div>

    </div>
    <!-- close container -->
    <!-- tombol export ke excel -->


    <!-- bootstrap js -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>