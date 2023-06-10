<?php
    $conn = mysqli_connect("localhost","root","","tsunamii-website");

    $hari = $_POST ['hari'];
    $tanggal = $_POST ['tanggal'];
    $waktu = $_POST ['waktu'];
    $kekuatan_gempa = $_POST ['kekuatan_gempa'];
    $pusat_gempa = $_POST ['pusat_gempa'];
    $kerugian = $_POST ['kerugian'];
    $area_terdampak = $_POST ['area_terdampak'];
    $korban_jiwa = $_POST ['korban_jiwa'];

    $query = "INSERT INTO info_tsunami VALUES('$hari','$tanggal','$waktu','$kekuatan_gempa','$pusat_gempa','$kerugian','$area_terdampak','$korban_jiwa')";

    mysqli_query($conn, $query);

    if ($query) {   
         header("Location:panduan_lihatData.php");
    }else {
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
?>
