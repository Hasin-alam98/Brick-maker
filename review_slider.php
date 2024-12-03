<!-- review_slider.php -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/css/splide.min.css">

<div class="splide" id="review-slider">
  <div class="splide__track">
    <ul class="splide__list">
      <li class="splide__slide text-center">
        <img src="reviewer1.jpg" alt="Reviewer 1" class="rounded-circle review-image mb-3">
        <h5 class="fw-bold">Reviewer 1</h5>
        <p class="fst-italic">"Great product! Highly recommend."</p>
      </li>
      <li class="splide__slide text-center">
        <img src="reviewer2.jpg" alt="Reviewer 2" class="rounded-circle review-image mb-3">
        <h5 class="fw-bold">Reviewer 2</h5>
        <p class="fst-italic">"Excellent service and fast delivery."</p>
      </li>
      <li class="splide__slide text-center">
        <img src="reviewer3.jpg" alt="Reviewer 3" class="rounded-circle review-image mb-3">
        <h5 class="fw-bold">Reviewer 3</h5>
        <p class="fst-italic">"High quality and durable. Will buy again."</p>
      </li>
    </ul>
  </div>
</div>

<!-- Splide JS -->
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.0.7/dist/js/splide.min.js"></script>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    new Splide('#review-slider', {
      type      : 'loop',
      perPage   : 1,
      autoplay  : true,
      interval  : 3000,
      pauseOnHover: true,
      cover     : false,
      height    : 'auto',
    }).mount();
  });
</script>

<style>
  /* Ensure review images are small and circular */
  .review-image {
    width: 80px;
    height: 80px;
    object-fit: cover;
    border: 2px solid #ddd;
    margin: 0 auto;
  }

  /* Center-align the text in the slider */
  #review-slider .splide__slide {
    padding: 30px 20px;
    margin: 20px;
    border-radius: 10px;
    background-color: #f9f9f9; /* Light background for contrast */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Subtle shadow */
  }
</style>
