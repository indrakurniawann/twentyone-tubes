<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/signup.css">
    <title>Sistem Informasi Pendistribusian Logistik Pasca Tsunami | Sign up</title>
</head>
<body>
    <div class="container">
        <div class="daftar-side">
            <label>Apakah sudah memiliki Akun ?</label><br><br>
            <a class="signup-btn" href="signin.php">Masuk</a>
        </div>
        <div class="container-2">
            <a href="dashboard.php" class="btn-close"><ion-icon name="close-outline"></ion-icon></a>
            <div class="container-3">
                <form action="signup_kirimData.php" method="post">  
                    <div class="logo">
                        <img src="../icon/Graphic_Elements.png" alt="">
                    </div>

                    <div class="username-box">
                        <div class="username">
                            <!-- <label for="exampleInputFName" class="form-label">Nama Depan</label><br> -->
                            <input name="nama_depan" autocomplete="off" type="username" class="form-control" id="exampleInputFName" aria-describedby="username" placeholder="Nama Depan"
                            >
                        </div>
                        <div class="username">
                            <!-- <label for="exampleInputBName" class="form-label">Nama Belakang</label><br> -->
                            <input name="nama_belakang" autocomplete="off" type="username" class="form-control" id="exampleInputBName" aria-describedby="username" placeholder="Nama Belakang">
                        </div>
                    </div>

                    <div class="email">
                        <!-- <label for="exampleInputEmail1" class="form-label">Alamat Email</label><br> -->
                        <input name="email" autocomplete="off" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    </div>

                    <div class="password">
                        <!-- <label for="exampleInputPassword1" class="form-label">Buat Kata Sandi</label><br> -->
                        <input name="create_password" autocomplete="off" type="password" class="form-control" id="exampleInputPassword1" placeholder="Buat kata sandi">
                    </div>

                    <div class="password">
                        <!-- <label for="exampleInputPassword2" class="form-label">Konfirmasi Kata Sandi</label><br> -->
                        <input name="confirm_password" autocomplete="off" type="password" class="form-control" id="exampleInputPassword2" placeholder="Konfirmasi kata sandi">
                    </div>

                    <div class="btn-form">
                        <button type="submit" class="btn-primary">Daftar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
        <!-- Script ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>