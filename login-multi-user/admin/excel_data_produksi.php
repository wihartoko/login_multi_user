<!-- export data ke ms excel -->
<?php
header("content-type: application/vnd-ms-excel");
header("content-disposition: attachment; filename=laporan-produksi.xls");

?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Web Produksi</title>
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="excel.css">
</head>

<body>
    <!-- container -->
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="card ">
                    <div class="card-header bg-warning text-secondary">
                        Data Proses Produksi
                    </div>
                    <div class="card-body">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>No</th>
                                <th class="text-center">Date</th>
                                <th>Shift</th>
                                <th>Dimention</th>
                                <th>Thikness</th>
                                <th>OP. Mesin 1</th>
                                <th>OP. Mesin 2</th>
                                <th>No. Wagon</th>
                                <th>Jml. Sheet</th>
                                <th>Jml. Template</th>

                            </tr>
                            <!-- menampilkan data barang -->
                            <?php
                            include "../koneksi.php";
                            $no = 1;
                            $ambildata = mysqli_query($conn, "select * from prod");
                            while ($tampil = mysqli_fetch_array($ambildata)) {
                                echo "
                            <tr>
                                <td>$no</td>
                                
                                <td>$tampil[tanggal]</td>
                                <td>$tampil[shift]</td>
                                <td>$tampil[dimention]</td>
                                <td>$tampil[thikness]</td>
                                <td>$tampil[hatcheck]</td>
                                <td>$tampil[pilling]</td>
                                <td>$tampil[nomorwagon]</td>
                                <td>$tampil[jumlahsheet]</td>
                                <td>$tampil[jumlahtemplate]</td>
                                
                                </tr>";
                                $no++;
                            }
                            ?>


                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- close container -->
    <br><br>
    <!-- timezona -->
    <p align="right">
        Download data Produksi pada <?php
                                    date_default_timezone_set("Asia/jakarta");
                                    $krw = date("d/m/y H:i:s a");
                                    echo "" . $krw;
                                    ?>
    </p>

    <!-- bootstrap js -->
    <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>