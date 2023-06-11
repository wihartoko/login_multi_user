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
                            <li><a class="dropdown-item" href="data_riject.php">Data Reject</a></li>
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
            <div class="col-md-8 mx-auto">
                <div class="card">
                    <div class="card-header bg-warning text-light">
                        Input Reject Produksi
                    </div>
                    <div class="card-body bg-secondary">
                        <form action="" method="post">
                            <div class="mb-3">
                                <div class="row">

                                    <input type="hidden" class="form-control" id="id_reject" name="id_reject" value="<?php echo $data['id_reject']; ?>">

                                    <div class="col">
                                        <label for="tanggal" class="form-label">Date</label>
                                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php
                                                                                                                    date_default_timezone_set("Asia/jakarta");
                                                                                                                    $krw = date("d/m/y H:i:s a");
                                                                                                                    echo "" . $krw;
                                                                                                                    ?>">
                                    </div>
                                    <div class="col">
                                        <label for="Shift" class="form-label">Shift</label>
                                        <select class="form-select" name="shift" id="shift">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                        </select>
                                    </div>
                                    <div class="col mb-1">
                                        <label for="Mesin2" class="form-label">OP. Mesin 2</label>
                                        <input type="text" class="form-control" name="mesin2" id="mesin2">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <label for="avalatas" class="form-label">Aval Atas</label>
                                        <input type="number" class="form-control" name="avalatas" id="avalatas">
                                    </div>
                                    <div class="col">
                                        <label for="avalbawah" class="form-label">Aval Bawah</label>
                                        <input type="number" class="form-control" name="avalbawah" id="avalbawah">
                                    </div>
                                    <div class="col mb-1">
                                        <label for="avaldalam" class="form-label">Aval dalam</label>
                                        <input type="number" class="form-control" name="avaldalam" id="avaldalam">
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col">
                                    <label for="watermark" class="form-label">Watermark</label>
                                    <input type="number" class="form-control" name="watermark" id="watermark">
                                </div>

                                <div class="col">
                                    <label for="Laminasi" class="form-label">Laminasi</label>
                                    <input type="text" class="form-control" name="laminasi" id="laminasi">
                                </div>

                                <div class="col mb-1">
                                    <label for="nabrakknife" class="form-label">Nabrak Knife</label>
                                    <input type="int" class="form-control" name="nabrakknife" id="nabrakknife">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="cuilsisi" class="form-label">Cuil Sisi</label>
                                    <input type="number" class="form-control" name="cuilsisi" id="cuilsisi">
                                </div>
                                <div class="col-md-6">
                                    <label for="lainnya" class="form-label">Lainnya</label>
                                    <input type="number" class="form-control" name="lainnya" id="lainnya">
                                </div>
                            </div>
                            <tr>
                                <div class="col  d-flex justify-content-center mt-3">
                                    <td><input type="submit" value="simpan" name="simpan" class="btn btn-primary d-flex justify-content-center""></td>
                                </div>
                                
                            </tr>

                        </form>
                    </div>
                    <div class=" card-footer bg-warning text-end text-light">
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