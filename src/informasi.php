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
    <link rel="stylesheet" href="..//css/informasi.css">
    <title>SATYASIH | Informasi</title>
</head>
<body>
<header class="header">
    <div class="icon">
      <img class="logo-name" src="../icon/name.png" alt="">
    </div>
    <nav class="navigation">
      <a href="dashboard.php">Dashboard</a>
      <a href="datainformasi.php" class="active">Informasi</a>
      <a href="inputposko.php">Posko</a>
      <a href="inputkebutuhan.php">Kebutuhan</a>
      <a href="inputdonasi">Donasi</a>
    <a href="inputdistribusi">Distribusi</a>
  </nav>
  <button class="btnlogin-popup" id="btnlogin-popup"><a class="btnlogin-page" href="signin.php">Login</a></button>
</header>

    <div class="informasi">
        <div class="page-1">
            <div class="quote">
                <div class="quote-text">
                    <h1>Halaman Informasi Bencana Tsunami</h1><br>
                    <h2>"If happiness makes you smile, then adversity makes you cry so that you can smile even wider in the days to come."</h2>
                </div>
            </div>
            <div class="image">
                <img src="../image/Solidarity-pana.png" alt="">
            </div>
        </div>    
        <div class="page-2">
            <div class="table">
                <table class="table-auto">
                    <thead class="thead-blue">
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
                        // echo "<td>" . $row['Date_Time'] . "</td>";
                        // Tambahkan kolom lain sesuai kebutuhan
                        echo "</tr>";
                    }
                    ?>
                    </tbody>
                </table>
            </div>
            <div class="btn-button">
                <div class="button">
                    <a class="btn-info" href="input/inputinformasi.php">Tambah Data</a>  
                </div>
            </div>
          </div>
        </div>

        
</body>
</html>