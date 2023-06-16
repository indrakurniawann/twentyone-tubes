
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../css/dashboard-style.css">
  <title>Sistem Informasi Pendistribusian dan Persediaan Logistik Pasca Tsunami | Dashboard</title>
</head>
<body>
  <header class="header">
    <div class="icon">
      <img class="logo-name" src="../icon/name.png" alt="">
    </div>
    <nav class="navigation">
      <a href="dashboard.php" class="active">Dashboard</a>
      <a href="inputinformasi.php" id="btn title-informasi">Informasi</a>
      <a href="inputposko.php">Posko</a>
      <a href="inputkebutuhan.php">Kebutuhan</a>
      <a href="inputdonasi">Donasi</a>
    <a href="inputdistribusi">Distribusi</a>
  </nav>
  <button class="btnlogin-popup" id="btnlogin-popup"><a class="btnlogin-page" href="signin.php">Login</a></button>
</header>

<div class="main">
  <div class="username">
    <h1>Dashboard</h1>
    <h2>Hi, <span name="front_name">Nugroho Indra</span> welcome back</h2>
  </div>
  <div class="search" id="mySearch"><input type="text" placeholder="Search..."><img src="../icon/search-outline.svg" alt=""></div>   
  <div class="bottom-main">
    <div class="left-side">
      <div class="side-atas">
        <div class="realtime_clock">
          <span id="hours">10</span><label > : </label>
          <span id="minutes">30</span><label > : </label>
          <span id="seconds">40</span>
        </div>
      </div>
      <div class="side-bawah">
        <div class="side-bawah-bawah">
        </div>
      </div>
    </div> 
    <img src="../image/illustration-1.png" alt="">
  </div>
</div>

<div class="team">
  <div class="anggota">
    <button>Indra</a></button><br>
    <button>Aurelia</a></button><br>
    <button>Daffa</a></button><br>
    <button>Rany</a></button><br>
    <button>Lintang</a></button><br>
    <button>Haffid</a></button>  
  </div>
</div>
<!-- Script ionicon -->
<script src="../js/dashboard.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>