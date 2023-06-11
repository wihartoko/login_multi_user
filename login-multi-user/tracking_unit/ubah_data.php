<?php
include "../koneksi.php";
$sql = mysqli_query($conn, "select* from prod where id_produksi='$_GET[kode]'");
$data = mysqli_fetch_array($sql);


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
                        <a class="nav-link" href="tambah_data.php">Tracking Unit</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="data_produksi.php">Data Produksi</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Reject
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="reject.php.php">Input riject</a></li>
                            <li><a class="dropdown-item" href="data_reject.php">Data Reject</a></li>
                        </ul>
                    </li>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Mesin
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="laporan_harian_mesin.php">Laporan Harian Mesin</a></li>
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
                        Edit data produksi
                    </div>
                    <div class="card-body bg-secondary">
                        <form action="" method="post">
                            <div class="mb-3">
                                <div class="row">


                                    <input type="hidden" class="form-control" id="id_produksi" name="id_produksi" value="<?php echo $data['id_produksi']; ?>">

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
                                        <select required class=" form-select" aria-label="Default select example" id="dimensi" name="dimensi">
                                            <option value="<?php echo $data['dimention']; ?>"><?php echo $data['dimention'] ?></option>
                                            <option value=" 1200x2400">1200x2400</option>
                                            <option value="1220x2440">1220x2440</option>
                                        </select>
                                    </div>

                                    <div class="col">
                                        <label for="thikness" class="form-label">Thikness</label>
                                        <select class="form-select" aria-label="Default select example" id="thikness" name="thikness" value="<?php echo $thikness; ?>">
                                            <option value="<?php echo $data['thikness']; ?>"><?php echo $data['thikness'] ?></option>
                                            <option value="3.5mm">3.5 mm</option>
                                            <option value="4mm">4 mm</option>
                                            <option value="4.5mm">4.5 mm</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <label for="mesin1" class="form-label">OP. Mesin 1</label>
                                    <input type="text" class="form-control" id="mesin1" name="mesin1" value="<?php echo $data['hatcheck']; ?>" required>
                                </div>

                                <div class="col-md-6">
                                    <label for="mesin2" class="form-label">OP. Mesin 2</label>
                                    <input type="text" class="form-control" id="mesin2" name="mesin2" value="<?php echo $data['pilling']; ?> " required>
                                </div>

                                <div class="col-md-4">
                                    <label for="nowagon" class="form-label">No. Wagon</label>
                                    <input type="int" class="form-control" id="nowagon" name="nowagon" value="<?php echo $data['nomorwagon']; ?> " required>
                                </div>

                                <div class="col-md-4">
                                    <label for="jmlsheet" class="form-label">Jml. sheet</label>
                                    <input type="int" class="form-control" name="jmlsheet" value="<?php echo $data['jumlahsheet']; ?> " id="jmlsheet" required>
                                </div>

                                <div class="col-md-4">
                                    <label for="jmltemplate" class="form-label">Jml. Template</label>
                                    <input type="int" class="form-control" name="jmltemplate" value="<?php echo $data['jumlahtemplate']; ?> " id="jmltemplate" required>
                                </div>


                            </div>
                            <tr>
                                <div class="col  d-flex justify-content-center mt-3">
                                    <td><input type="submit" value="simpan" name="simpan" class="btn btn-primary d-flex justify-content-center""></td>
                                </div>
                                
                            </tr>

                        </form>

                        <!-- ubah data -->
                        <?php
                        include "../koneksi.php";
                        // database = '$_POST[ name field]'
                        if (isset($_POST['simpan'])) {
                            mysqli_query($conn, "update prod set
                                tanggal = '$_POST[tanggal]',
                                dimention = '$_POST[dimensi]',
                                thikness = '$_POST[thikness]',
                                hatcheck = '$_POST[mesin1]',
                                pilling = '$_POST[mesin2]',
                                nomorwagon = '$_POST[nowagon]',
                                jumlahsheet = '$_POST[jmlsheet]',
                                jumlahtemplate = '$_POST[jmltemplate]'
                                
                                where id_produksi = $_GET[kode]
                                ");
                            echo "data barang  telah diubah";
                            echo "<meta http-equiv=refresh content=1;URL='data_produksi.php'>";
                        }
                        ?>
                        <!-- close ubah data -->
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