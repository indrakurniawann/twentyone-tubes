<?php

$conn = mysqli_connect("localhost", "root", "", "tsunamii-website");

$query = "SELECT * FROM info_tsunami ORDER BY Date_Time DESC";
$result = $conn->query($query);
// $data_buffer = mysqli_query($conn, "SELECT * FROM info_tsunami");
// $data = mysqli_fetch_all($data_buffer);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="informasi">
    <div class="title_page">
        <label id="title-informasi">Data Informasi Tsunami di Indonesia</label>
    </div>

    <div class="table">
        <table class="table-auto">
            <thead class="thead-blue">
                <th>Hari</th>
                <th>Tanggal</th>
                <th>waktu</th>
                <th>Kekuatan Gempa</th>
                <th>Pusat Gempa</th>
                <th>Kerugian</th>
                <th>Area Terdampak</th>
                <th>Korban jiwa</th>
                <th>Submit</th>
                </tr>
            </thead>
            <tbody>
            <?php
            $separator = "/";
            // Memasukkan data ke dalam tabel HTML
            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['hari_info'] . "</td>";
                echo "<td>" . $row['tanggal_info'] . $separator . $row['bulan_info'] . $separator . $row['tahun_info'] . "</td>";
                echo "<td>" . $row['waktu_info'] . "</td>";
                echo "<td>" . $row['kekuatan_gempa_info'] . "</td>";
                echo "<td>" . $row['pusat_gempa_info'] . "</td>";
                echo "<td>" . $row['kerugian_info'] . "</td>";
                echo "<td>" . $row['area_terdampak_info'] . "</td>";
                echo "<td>" . $row['korban_jiwa_info'] . "</td>";
                echo "<td>" . $row['Date_Time'] . "</td>";
                // Tambahkan kolom lain sesuai kebutuhan
                echo "</tr>";
            }
            ?>
            </tbody>
        </table>
      </div>
      <div class="button">
          <a class="btn-info" href="inputinformasi.php">Tambah Data</a>
          <a class="btn-info" href="dashboard.php">Dashboard</a>
      </div>  
  </div>
</body>
</html>