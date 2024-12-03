<!-- header.php -->
<!-- header.php -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">

<header class="splide" id="header-slider">
  <div class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide">
        <img src="slide1.jpg" alt="Slide 1">
      </li>
      <li class="splide__slide">
        <img src="slide2.jpg" alt="Slide 2">
      </li>
      <li class="splide__slide">
        <img src="slide3.jpg" alt="Slide 3">
      </li>
    </ul>
  </div>

  <!-- Centered Content Overlay -->
  <div class="slider-content-overlay">
    <div class="container text-center">
      <h1 class="text-white">Welcome to BrandName</h1>
      <p class="lead text-white">Delivering quality products and exceptional service</p>
      <a href="#products" class="btn btn-secondary">Explore Products</a>
    </div>
  </div>
</header>

<!-- Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
<script>
  document.addEventListener( 'DOMContentLoaded', function () {
    new Splide( '#header-slider', {
      type   : 'loop',
      perPage: 1,
      autoplay: true,
      interval: 3000,
      cover: true,
      heightRatio: 0.5
    } ).mount();
  } );
</script>

<style>
  /* Style the slider to be full-width and relative */
  #header-slider {
    position: relative;
  }

  /* Style the overlayed content */
  .slider-content-overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    display: flex;
    align-items: center;
    justify-content: center;
    pointer-events: none; /* Prevents interference with slider navigation */
  }

  .slider-content-overlay .container {
    z-index: 2; /* Ensures text is above the images */
  }

  /* Optional: Adjust overlay background for readability */
  .slider-content-overlay::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for text contrast */
    z-index: 1;
  }
</style>

