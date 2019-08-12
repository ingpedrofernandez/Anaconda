<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Responsive Lightbox</title>
<link href="css/gallery.css" rel="stylesheet" type="text/css" />

</head>
<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
<body>
<!-- Images used to open the lightbox -->
<div class="row">
  <div class="column">
    <img src="gallery/serp1_t.png" onclick="openModal();currentSlide(1)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="gallery/serp2_t.png" onclick="openModal();currentSlide(2)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="gallery/serp3_t.png" onclick="openModal();currentSlide(3)" class="hover-shadow">
  </div>
  <div class="column">
    <img src="gallery/serp4_t.png" onclick="openModal();currentSlide(4)" class="hover-shadow">
  </div>
</div>

<!-- The Modal/Lightbox -->
<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      <div class="numbertext">1 / 4</div>
      <img src="gallery/serp1.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">2 / 4</div>
      <img src="gallery/serp2.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">3 / 4</div>
      <img src="gallery/serp3.png" style="width:100%">
    </div>

    <div class="mySlides">
      <div class="numbertext">4 / 4</div>
      <img src="gallery/serp4.png" style="width:100%">
    </div>
    
    <!-- Next/previous controls -->
    <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
    <a class="next" onclick="plusSlides(1)">&#10095;</a>

    <!-- Caption text -->
    <div class="caption-container">
      <p id="caption"></p>
    </div>
    
    <!-- Thumbnail image controls -->
    <div class="column">
      <img class="demo" src="gallery/serp1_t.png" onclick="currentSlide(1)" alt="Nature">
    </div>

    <div class="column">
      <img class="demo" src="gallery/serp2_t.png" onclick="currentSlide(2)" alt="Snow">
    </div>

    <div class="column">
      <img class="demo" src="gallery/serp3_t.png" onclick="currentSlide(3)" alt="Mountains">
    </div>

    <div class="column">
      <img class="demo" src="gallery/serp4_t.png" onclick="currentSlide(4)" alt="Lights">
    </div>
  </div>
</div>
    
</body>
</html>