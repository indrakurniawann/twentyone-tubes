
// realtime clock
function updateClock() {
  var now = new Date();
  var hours = now.getHours();
  var minutes = now.getMinutes();
  var seconds = now.getSeconds();

  // Tambahkan angka 0 di depan angka jika angka < 10
  hours = hours < 10 ? "0" + hours : hours;
  minutes = minutes < 10 ? "0" + minutes : minutes;
  seconds = seconds < 10 ? "0" + seconds : seconds;


  // var formattedClock = hours + " : " + minutes + " WIB";
  // document.getElementById('clock').textContent = formattedClock; 
  document.getElementById('hours').textContent = hours;
  document.getElementById('minutes').textContent = minutes;
  document.getElementById('seconds').textContent = seconds;
}


// Panggil fungsi updateClock setiap detik (1000ms)
setInterval(updateClock, 1000);

function updateTanggal() {
  var date = new Date();
  var tanggal = date.getDate();
  var bulan = date.getMonth() + 1; // Ditambah 1 karena bulan dimulai dari 0 (Januari)
  var tahun = date.getFullYear();

  // Membuat format tanggal dalam bentuk dd-mm-yyyy
  var formattedTanggal = tanggal + " - " + bulan + " - " + tahun;

  // Menampilkan tanggal di dalam elemen dengan id "tanggal"
  document.getElementById('tanggal').textContent = formattedTanggal;
}

// Memanggil fungsi updateTanggal setiap detik
setInterval(updateTanggal, 1000);

// search berubah
