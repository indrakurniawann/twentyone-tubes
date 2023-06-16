<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..//css/signin.css">
    <title>Sistem Informasi Pendistribusian Logistik Pasca Tsunami | Sign In</title>
</head>
<body>
    <div class="container">
        <a href="dashboard.php" class="btn-close"><ion-icon name="close-outline"></ion-icon></a>
        <!-- signin2     -->
        <div class="container-2">
            <div class="container-3">
                <form action="signin_kirimData.php" method="post">
                <div class="logo">
                    <img src="../icon/Graphic_Elements.png" alt="">
                </div>
                <div class="username">
                    <label for="exampleInputEmail1" class="form-label">Alamat Email</label><br>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Masukan email">
                </div>
                <div class="password">
                    <label for="exampleInputPassword1" class="form-label">Kata Sandi</label><br>
                    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukan kata sandi">
                </div>
                <div class="saved">
                    <div class="checkbox">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Ingat tentang aku</label>
                    </div>
                    <div class="forgot">
                        <a href="" class="forgot-password" for="forgot password">Lupa kata sandi?</a>
                    </div>
                </div>
                <div class="btn-form">
                    <button type="submit" class="btn-primary">Masuk</button>
                </div>
            </form>
        </div>
    </div>
    <!-- signup -->
        <div class="daftar-side"">
                <label>Belum memiliki Akun ?</label><br><br>
                <a class="signup-btn" href="signup.php">Daftar</a>
        </div>
    </div>
    <!-- Script ionicon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>