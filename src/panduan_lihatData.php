<?php
$conn = mysqli_connect("localhost", "root", "", "tsunamii-website");

$data_buffer = mysqli_query($conn, "SELECT * FROM info_tsunami");
$data = mysqli_fetch_all($data_buffer);
$index = count($data);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/panduan_lihatData.css">
    <title>Sistem Informasi Pendistribusian dan Persediaan Logistik Pasca Tsunami | Lihat Data</title>
</head>
<body>
<header>
    <div class="heading">
        <h1>
        SISTEM INFORMASI PENDISTRIBUSIAN DAN PERSEDIAAN LOGISTIK PASCA TSUNAMI
        </h1>
    </div>    
    </header>

    <div class="title_page">
        <label>Data Informasi Tsunami di Indonesia</label>
    </div>

    <div class="table">
        <table class="table-auto">
            <thead class="thead-blue">
                <tr>
                <th>Hari</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Kekuatan Gempa</th>
                <th>Pusat Gempa</th>
                <th>Kerugian</th>
                <th>Area Terdampak</th>
                <th>Korban jiwa</th>
                </tr>
            </thead>
            <tbody>
                <?php for($i=0;$i<$index;$i++): ?>
                    <tr>
                        <td><?php echo $data[$i][0];?></td>
                        <td><?php echo $data[$i][1];?></td>
                        <td><?php echo $data[$i][2];?></td>
                        <td><?php echo $data[$i][3];?></td>
                        <td><?php echo $data[$i][4];?></td>
                        <td><?php echo $data[$i][5];?></td>
                        <td><?php echo $data[$i][6];?></td>
                        <td><?php echo $data[$i][7];?></td>
                    </tr>
                    <?php endfor?>
            </tbody>
        </table>
    </div>
   
    <div class="button">
        <a class="tambah-data" href="panduan_tambahData.php">Tambah Data</a>
        <a class="dashboard" href="dashboard.php">Dashboard</a>
    </div>
</body>
</html>