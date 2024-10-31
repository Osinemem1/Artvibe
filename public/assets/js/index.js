document.addEventListener('DOMContentLoaded', () => {
  const slides = document.querySelectorAll('.bot2');
  let currentSlide = 1;
  const totalSlides = slides.length;
  const slideInterval = 5000;

  const changeSlide = () => {
    slides[currentSlide].classList.remove('active');
    currentSlide = (currentSlide + 1) % totalSlides;
    slides[currentSlide].classList.add('active');
  };

  slides[currentSlide].classList.add('active');
  setInterval(changeSlide, slideInterval);
});

// my scroll to top botton area

const scrollToTopBtn = document.getElementById('scrollToTopBtn');

window.onscroll = function () {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    scrollToTopBtn.style.display = 'block';
  } else {
    scrollToTopBtn.style.display = 'none';
  }
};

scrollToTopBtn.onclick = function () {
  window.scrollTo({ top: 0, behavior: 'smooth' });
};

// // script.js
// let currentIndex = 0;
// const slides = document.querySelectorAll('.bot2');
// const totalSlides = slides.length;

// function showSlide(index) {
//     const slidesContainer = document.querySelector('.slides');
//     const offset = -index * 100; // Move slides to the left
//     slidesContainer.style.transform = `translateX(${offset}%)`;
// }

// function nextSlide() {
//     currentIndex = (currentIndex + 1) % totalSlides;
//     showSlide(currentIndex);
// }

// function startSlider() {
//     setInterval(nextSlide, 3000); // Change slide every 3 seconds
// }

// document.addEventListener('DOMContentLoaded', startSlider);
