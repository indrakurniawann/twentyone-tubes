<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../..//css/input_informasi.css">
    <title>Document</title>
</head>
<body>
            <form action="../kirimData/info_kirimData.php" method="post">
                <div class="container">
                    <label for="">Hari</label><br>
                    <input class="full" type="text" name="hari_info">
                </div>
                
                <div class="input-form-hbtw">
                    <div class="containe">
                        <label for="">Tanggal</label><br>
                        <input class="not-full" type="text" name="tanggal_info">
                    </div>
                    
                    <div class="containe">
                        <label for="">Bulan</label><br>
                        <input class="not-full" type="text" name="bulan_info">
                    </div>
                    
                    <div class="containe">
                        <label for="">Tahun</label><br>
                        <input class="not-full" type="text" name="tahun_info">
                    </div> 
                    
                    <div class="containe">
                        <label for="">Waktu</label><br>
                        <input class="not-full" type="text" name="waktu_info">
                    </div>         
                </div>
                
                <div class="container">
                    <label for="">Kekuatan Gempa</label><br>
                    <input class="full" type="text" name="kekuatan_gempa_info">
                </div>
                
                <div class="container">
                    <label for="">Lokasi Gempa</label><br>    
                    <input class="full" type="text" name="pusat_gempa_info">
                    <br>
                </div>
                <div class="container">
                    <label form="">kerugian</label><br>
                    <input class="full" type="text" name="kerugian_info">
                    <br>    
                </div>
        
                <div class="container">
                    <label for="">Area Terdampak</label><br>
                    <input class="full" type="text" name="area_terdampak_info">
                    <br>
                </div>
        
                <div class="container">
                    <label form="">Korban Jiwa</label><br>
                    <input class="full" type="text" name="korban_jiwa_info">
                    <br>
                </div>
        
            <button type="submit" class="button">Submit</button>
            <button type="reset" class="button">Clear</button>
            <span class="icon-close" >
                <a href="../informasi.php"><ion-icon name="close-outline"></ion-icon></a> 
            </span>
        </form>
</body>

<!-- ion-icon -->
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>