<!-- export data ke ms excel -->
<?php
header("content-type: application/vnd-ms-excel");
header("content-disposition: attachment; filename=laporan-riject.xls");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="excel.css">
    <title>Document</title>
</head>

<body>
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


</body>

</html>