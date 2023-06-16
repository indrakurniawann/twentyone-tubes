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

  document.getElementById('hours').textContent = hours;
  document.getElementById('minutes').textContent = minutes;
  document.getElementById('seconds').textContent = seconds;
}

// Panggil fungsi updateClock setiap detik (1000ms)
setInterval(updateClock, 1000);

// search berubah
var input = document.getElementById("mySearch");
          
input.addEventListener("click", function(event) {
  var targetElement = event.target;
  if (targetElement === input) {
    input.classList.add("clicked");
  } else {
    input.classList.remove("clicked");
  }
});
 