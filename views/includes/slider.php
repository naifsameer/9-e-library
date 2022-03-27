<!-- hero section-->
<section class="c-slider">
  <div class="container">
    <div class="list">
      <div class="item">
        <img src="/images/slider/slider-1.jpg" alt="slider image" />
      </div>
      <div class="item">
        <img src="/images/slider/slider-2.webp" alt="slider image" />
      </div>
      <div class="item">
        <img src="/images/slider/slider-3.jpg" alt="slider image" />
      </div>
      <div class="item">
        <img src="/images/slider/slider-1.jpg" alt="slider image" />
      </div>
      <div class="item">
        <img src="/images/slider/slider-2.webp" alt="slider image" />
      </div>
      <div class="item">
        <img src="/images/slider/slider-3.jpg" alt="slider image" />
      </div>

      <div class="c-slider-btn">
        <button class="slider-next-btn">
          <i class="fa fa-angle-right"></i>
        </button>

        <button class="slider-prev-btn">
          <i class="fa fa-angle-left"></i>
        </button>
      </div>


      <div class="c-slider-dotes"></div>

    </div>
  </div>
</section>

<script src="js/slider.js"></script>

<script>
  slider({
    items: '.c-slider .item',
    nextBtn: '.slider-next-btn',
    prevBtn: '.slider-prev-btn',
    dotes: true,
  });
</script>