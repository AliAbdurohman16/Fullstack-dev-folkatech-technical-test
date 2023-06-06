const sliderContainer = document.querySelector('.slider-container');
const slider = document.querySelector('.slider');
const sliderItems = document.querySelectorAll('.slider-item');
const prevButton = document.querySelector('.prev-button');
const nextButton = document.querySelector('.next-button');

const sliderWidth = sliderContainer.offsetWidth; // Lebar slider-container
const slideWidth = sliderItems[0].offsetWidth; // Lebar satu slide
const maxPosition = sliderWidth - slideWidth * sliderItems.length; // Batasan posisi maksimum

let currentPosition = 0; // Posisi saat ini

// Fungsi untuk menggeser slider ke kiri
function slideLeft() {
  currentPosition += slideWidth; // Menambah posisi saat ini dengan lebar satu slide

  // Batasan geser ke kiri
  if (currentPosition > 0) {
    currentPosition = 0; // Kembali ke posisi awal
  }

  slider.style.transform = `translateX(${currentPosition}px)`;
}

// Fungsi untuk menggeser slider ke kanan
function slideRight() {
  currentPosition -= slideWidth; // Mengurangi posisi saat ini dengan lebar satu slide

  // Batasan geser ke kanan
  if (currentPosition < maxPosition) {
    currentPosition = maxPosition; // Kembali ke posisi maksimum
  }

  slider.style.transform = `translateX(${currentPosition}px)`;
}

// Tambahkan event listener pada tombol prev dan next
prevButton.addEventListener('click', slideLeft);
nextButton.addEventListener('click', slideRight);
