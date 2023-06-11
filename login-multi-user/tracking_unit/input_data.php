<?php
include "../koneksi.php";

if (isset($_POST['simpan'])) {
    mysqli_query($conn, "insert into prod set
    
    tanggal = '$_POST[tanggal]',
    shift = '$_POST[shift]',
    dimention = '$_POST[dimensi]',
    thikness = '$_POST[thikness]',
    hatcheck = '$_POST[mesin1]',
    pilling = '$_POST[mesin2]',
    nomorwagon = '$_POST[nowagon]',
    jumlahsheet = '$_POST[jmlsheet]',
    jumlahtemplate = '$_POST[jmltemplate]'
    ");
    echo "data barang baru telah tersimpan";
    echo "<meta http-equiv=refresh content=2;URL='data_produksi.php'>";
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
                        <a class="nav-link" href="input_data.php">Tracking Unit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_produksi.php">Data Produksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reject
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="../riject/input_riject.php">Input riject</a></li>
                            <li><a class="dropdown-item" href="../riject/data_riject.php">Data Reject</a></li>
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
                    <div class="card-header bg-warning text-secondary">
                        Input Tracking Unit
                    </div>
                    <div class="card-body bg-secondary">
                        <form action="" method="post">

                            <div class="mb-3">
                                <div class="row">
                                    <div class="col">
                                        <label for="tanggal" class="form-label">Date</label>
                                        <input type="text" class="form-control" id="tanggal" name="tanggal" value="<?php
                                                                                                                    date_default_timezone_set("Asia/jakarta");
                                                                                                                    $krw = date("d/m/y H:i:s a");
                                                                                                                    echo "" . $krw;
                                                                                                                    ?>">
                                    </div>

                                    <div class="col">
                                        <label for="dimensi" class="form-label">Dimention</label>
                                        <select class="form-select" aria-label="Default select example" name="dimensi" id="dimensi">
                                            <option value="1200x2400">1200x2400</option>
                                            <option value="1220x2440">1220x2440</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <label for="thikness" class="form-label">Thikness</label>
                                        <select class="form-select" aria-label="Default select example" name="thikness" id="thikness">
                                            <option value="3.5mm">3.5 mm</option>
                                            <option value="4mm">4 mm</option>
                                            <option value="4.5mm">4.5 mm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-4">
                                    <label for="shitf" class="form-label">Shift</label>
                                    <select class="form-select" aria-label="Default select example" name="shift" id="shift">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label for="mesin1" class="form-label">OP. Mesin 1</label>
                                    <input type="text" class="form-control" name="mesin1" id="mesin1" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="mesin2" class="form-label">OP. Mesin 2</label>
                                    <input type="text" class="form-control" name="mesin2" id="mesin2" required>
                                </div>

                                <div class="col">
                                    <label for="nowagon" class="form-label">No. Wagon</label>
                                    <input type="number" class="form-control" name="nowagon" id="nowagon" required>
                                </div>

                                <div class="col">
                                    <label for="jmlsheet" class="form-label">Jml. sheet</label>
                                    <input type="number" class="form-control" name="jmlsheet" id="jmlsheet" required>
                                </div>

                                <div class="col">
                                    <label for="jmltemplate" class="form-label">Jml. Template</label>
                                    <input type="number" class="form-control" name="jmltemplate" id="jmltemplate" required>
                                </div>

                            </div>
                            <tr>
                                <div class="col d-flex justify-content-center mt-2">
                                    <td><input type="submit" value="simpan" name="simpan" class="btn btn-primary"></td>
                                </div>
                            </tr>

                        </form>
                    </div>
                    <div class="card-footer bg-warning text-end text-light">
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