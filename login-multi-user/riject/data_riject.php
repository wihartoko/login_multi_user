<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {
    mysqli_query($conn, "insert into reject set
    
    tanggal = '$_POST[tanggal]',
    shift = '$_POST[shift]',
    mesin2 = '$_POST[mesin2]',
    avalatas = '$_POST[avalatas]',
    avalbawah = '$_POST[avalbawah]',
    avaldalam = '$_POST[avaldalam]',
    watermark = '$_POST[watermark]',
    laminasi = '$_POST[laminasi]',
    nabrakknife = '$_POST[nabrakknife]',
    cuilsisi = '$_POST[cuilsisi]',
    lainnya = '$_POST[lainnya]'
    ");
    echo "data barang baru telah tersimpan";
    echo "<meta http-equiv=refresh content=2;URL='data_riject.php'>";
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
    <!--     <!-- navbar -->
    <nav class="navbar navbar-expand-lg " style="background-color: #e3f2fd;">
        <div class="container">
            <a class="navbar-brand text-uppercase fw-bold " href="#"> Bakul Pak Wie</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="../home_operator.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tracking_unit/input_data.php">Tracking Unit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../tracking_unit/data_produksi.php">Data Produksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reject
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="input_riject.php">Input riject</a></li>
                            <li><a class="dropdown-item" href="data_riject.php">Data Riject</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mesin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../laporan_harian_mesin/input_laporan.php">Input Laporan Harian Mesin</a></li>
                            <li><a class="dropdown-item" href="../laporan_harian_mesin/data_laporan.php">Laporan Harian Mesin</a></li>
                            <li><a class="dropdown-item" href="Work_instruction.php">Work Instruction</a></li>
                        </ul>
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
                        Data Reject Harian
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>No</th>
                                <th class="text-center">Date</th>
                                <th>Shift</th>
                                <th>OP. Mesin 2</th>
                                <th>Aval Atas</th>
                                <th>Aval Bawah</th>
                                <th>Aval Dalam</th>
                                <th>Watermark</th>
                                <th>Laminasi</th>
                                <th>Nabrak Knife</th>
                                <th>Cuil Sisi</th>
                                <th>Lainnya</th>
                                <th colspan="3" class="text-center">Aksi</th>
                            </tr>
                            <!-- menampilkan data barang -->
                            <?php
                            include "../koneksi.php";
                            $no = 1;
                            $ambildata = mysqli_query($conn, "select * from reject");
                            while ($tampil = mysqli_fetch_array($ambildata)) {
                                echo "
                            <tr>
                                <td>$no</td>
                                
                                <td>$tampil[tanggal]</td>
                                <td>$tampil[shift]</td>
                                <td>$tampil[mesin2]</td>
                                <td>$tampil[avalatas]</td>
                                <td>$tampil[avalbawah]</td>
                                <td>$tampil[avaldalam]</td>
                                <td>$tampil[watermark]</td>
                                <td>$tampil[laminasi]</td>
                                <td>$tampil[nabrakknife]</td>
                                <td>$tampil[cuilsisi]</td>
                                <td>$tampil[lainnya]</td>
                                <td><a href='?kode=$tampil[id_reject]'> <input type='submit'  value='hapus' class='btn btn-danger'> </a> </td>
                                <td><a href='ubah_data.php?kode=$tampil[id_reject]'> <input type='submit' value='Edit' class='btn btn-warning'> </a> </td>
                                </tr>";
                                $no++;
                            }
                            ?>
                        </table>
                        <!-- hapus data -->
                        <?php
                        if (isset($_GET['kode'])) {
                            mysqli_query($conn, "delete from reject where id_reject= '$_GET[kode]'");
                            echo "data telah terhapus";
                            echo "<meta http-equiv=refresh content=2;URL='data_riject.php'>";
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


    <!-- bootstrap js -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>