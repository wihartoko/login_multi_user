<!-- export data ke ms excel -->
<?php
header("content-type: application/vnd-ms-excel");
header("content-disposition: attachment; filename=laporan-mesin.xls");

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
    <!-- timezona -->
    <br><br>
    <p align="right">
        Download data Produksi pada <?php
                                    date_default_timezone_set("Asia/jakarta");
                                    $krw = date("d/m/y H:i:s a");
                                    echo "" . $krw;
                                    ?>
    </p>
</body>

</html>