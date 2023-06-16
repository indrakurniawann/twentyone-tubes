<?php
    date_default_timezone_set('Asia/Jakarta');
// memanggil database
    $conn = mysqli_connect("localhost","root","","tsunamii-website");

// informasi
    $hari_info = $_POST ['hari_info'];
    $tanggal_info = $_POST ['tanggal_info'];
    $bulan_info = $_POST ['bulan_info'];
    $tahun_info = $_POST ['tahun_info'];
    $waktu_info = $_POST ['waktu_info'];
    $kekuatan_gempa_info = $_POST ['kekuatan_gempa_info'];
    $pusat_gempa_info = $_POST ['pusat_gempa_info'];
    $kerugian_info = $_POST ['kerugian_info'];
    $area_terdampak_info = $_POST ['area_terdampak_info'];
    $korban_jiwa_info = $_POST ['korban_jiwa_info'];
   
    // Create a DateTime object for the current timestamp
    $timestamp = new DateTime();

    // Format the timestamp in the desired format
    $timestampString = $timestamp->format('Y-m-d H:i:s');

    $query = "INSERT INTO info_tsunami VALUES('$hari_info','$tanggal_info','$bulan_info','$tahun_info','$waktu_info','$kekuatan_gempa_info','$pusat_gempa_info','$kerugian_info','$area_terdampak_info','$korban_jiwa_info','$timestampString')";
    
    mysqli_query($conn, $query);

    if ($query) {   
         header("Location:dashboard.php");
    }else {
        echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
    }
?>
