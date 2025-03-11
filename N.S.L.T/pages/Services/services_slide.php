<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<link rel="stylesheet" href="services_slide.css">
<body>
  

<div class="Egypt">
    <h1>Egypt Through the Eyes of the WORLD</h1>
<div class="slider">
  <div class="slides_ser">
      <div class="slide_ser">
          <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0006.jpg" alt="صورة 1">
      </div>
      <div class="slide_ser">
          <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0014.jpg" alt="صورة 2">
      </div>
      <div class="slide_ser">
        <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0017.jpg" alt="صورة 2">
    </div>
    <div class="slide_ser">
      <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0026.jpg" alt="صورة 2">
  </div>
  <div class="slide_ser">
    <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0038.jpg" alt="صورة 2">
</div>
<div class="slide_ser">
  <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0039.jpg" alt="صورة 2">
</div>
<div class="slide_ser">
  <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0042.jpg" alt="صورة 2">
</div>
<div class="slide_ser">
  <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0058.jpg" alt="صورة 2">
</div>
<div class="slide_ser">
  <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0048.jpg" alt="صورة 2">
</div>
<div class="slide_ser">
  <img src="/N.S.L.T/images/some-pic/IMG-20250215-WA0058.jpg" alt="صورة 2">
</div>
  </div>

</div>
</div>  



<script>
  let slide_serIndex = 0;

  function moveSlide(n) {
      const slide_sers = document.querySelector('.slides_ser');
      const totalSlides = document.querySelectorAll('.slide_ser').length;
      slide_serIndex += n;
      if (slide_serIndex >= totalSlides) { slide_serIndex = 0; }
      if (slide_serIndex < 0) { slide_serIndex = totalSlides - 1; }
      slide_sers.style.transform = `translateX(${-slide_serIndex * 100}%)`;
  }
</script>
</body>
</html>