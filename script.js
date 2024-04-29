//https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js

// Sélection de l'image
const image = document.getElementById('myImage');

// Sélection du texte à afficher
const text = document.getElementById('text');

// Ajout d'un événement de clic à l'image
image.addEventListener('click', function() {
  // Affichage du texte
  text.style.display = 'block';
});

<script>
  const carousel = document.querySelector('.carousel');
  const prevBtn = carousel.querySelector('.prev');
  const nextBtn = carousel.querySelector('.next');
  const slides = carousel.querySelectorAll('li');
  let currentIndex = 0;

  function showSlide(index) {
    slides.forEach((slide, i) => {
      slide.style.transform = `translateX(${(i - index) * 100}%)`;
    });
  }

  function nextSlide() {
    currentIndex = (currentIndex + 1) % slides.length;
    showSlide(currentIndex);
  }

  function prevSlide() {
    currentIndex = (currentIndex - 1 + slides.length) % slides.length;
    showSlide(currentIndex);
  }

  nextBtn.addEventListener('click', nextSlide);
  prevBtn.addEventListener('click', prevSlide);

  showSlide(currentIndex);
  </script>