<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/panduan_tambahData.css">
    <title>Sistem Informasi Pendistribusian dan Persediaan Logistik Pasca Tsunami | Tambah Data</title>
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
        <label>Input Data tentang Tsunami</label>
    </div>


<!-- form data -->
    <form autocomplete="off" action="panduan_kirimData.php" method="post">
            <div class="input-form">
                <label for="hari">Hari</label><br>
                <input class="hari" name="hari" type="text" placeholder="Masukan hari"><br>
            </div>
            <div class="input-form">
                <label for="tanggal">Tanggal</label><br>
                <input class="tanggal" name="tanggal" type="text" placeholder="Masukan tanggal (dd/mm/yyyy)"><br>
            </div>
            <div class="input-form">
                <label for="waktu">Waktu</label><br>
                <input class="waktu" name="waktu" type="text" placeholder="Masukan waktu (hh:mm)"><br>
            </div>
            <div class="input-form">
                <label for="kekuatan_gempa">Kekuatan Gempa</label><br>
                <input placeholder="Masukan kekuatan gempa" class="kekuatan_gempa" name="kekuatan_gempa" type="text"><br>
            </div>
            <div class="input-form">
                <label for="pusat_gempa">Lokasi Gempa</label><br>
                <textarea placeholder="Masukan lokasi gempa" name="pusat_gempa" id="" cols="108" rows="7"></textarea><br>
            </div>
            <div class="input-form">
                <label for="kerugian">Kerugian</label><br>
                <input placeholder="Masukan Kerugian" class="kerugian" name="kerugian" type="text"><br>
            </div>
            <div class="input-form">
                <label for="area_terdampak">Luas Area Terdampak</label><br>
                <input placeholder="Masukan luas area terdampak" class="area_terdampak" name="area_terdampak" type="text"><br>
            </div>
            <div class="input-form">
                <label for="korban_jiwa">Korban Jiwa</label><br>
                <input placeholder="Masukan jumlah korban jiwa" class="korban_jiwa" name="korban_jiwa" type="text"><br>    
            </div>    
            <div class="button">
                <button type="reset" class="button-cancel">Batal</button>
                <button type="submit" class="button-submit">Kirim</button>
            </div>
        </form>
</body>
</html>