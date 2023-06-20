<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="..//css/dashboard-style.css">
  <title>SATYASIH | Dashboard</title>
</head>
<body>
  <header class="header">
    <div class="icon">
      <img class="logo-name" src="../icon/name.png" alt="">
    </div>
    <nav class="navigation">
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="informasi.php" id="btn title-informasi">Informasi</a>
      <a href="inputposko.php">Posko</a>
      <a href="inputkebutuhan.php">Kebutuhan</a>
      <a href="inputdonasi">Donasi</a>
    <a href="inputdistribusi">Distribusi</a>
  </nav>
  <button class="btnlogin-popup" id="btnlogin-popup"><a class="btnlogin-page" href="signin.php">Login</a></button>
</header>

<div class="side-bar">
    <div class="container-clock">
      <div class="realtime_clock">
        <!-- <span id="clock"></span> -->
        <span id="hours">09</span>
        <span id="dd">:</span>
        <span id="minutes">00</span>
        <span id="dd">:</span>
        <div class="second-area">
          <span id="area">WIB</span>
          <ion-icon name="sunny-outline"></ion-icon>
        </div>
      </div>
      <!-- <div class="realdate">
        <span id="tanggal"></span>
      </div> -->
    </div>
</div>

<div class="dashboard-page">
    <div class="main">
      <div class="left-side">
        <div class="username">
          <h1>Selamat datang di Satyasih</h1>
          <h2>"Give your goodness to the world, and the world will be good to you too."</h2>
        </div>
        </div>
        <div class="right-side">
          <img src="../image/illustration-1.png" alt="">
        </div> 
    </div>
</div>
<!-- 
<div class="informasi">
  
</div> -->

<!-- Script ionicon -->
<script src="..//js/dashboard.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>