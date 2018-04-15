<?PHP
session_start();
require('menu.php');
require('auth.php');

?>

<html>
<head>
        <title></title>
<link rel ="stylesheet" type= "text/css" href = "movie.css" />
</head>

<body>


<!-- Slideshow container -->
<div class="slideshow-container">

  <!-- Full-width images with number and caption text -->
 <div class="mySlides fade">
    <div class="numbertext">1 / 10</div>
    <img src="images/Beauty.jpg" style="width:100%">
    <div class="text">Beauty and the Beast</div>
  </div>


  <div class="mySlides fade">
    <div class="numbertext">2 / 10</div>
    <img src="images/Des.jpg" style="width:100%">
    <div class="text">Despicable Me 3</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">3 / 10</div>
    <img src="images/fate.jpg" style="width:100%">
    <div class="text">Fate of the Furious</div>
  </div>

  <div class="mySlides fade">
    <div class="numbertext">4 / 10</div>
    <img src="images/guardians.jpg" style="width:100%">
    <div class="text">Guardians of the Galaxy: Vol 2.</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">5 / 10</div>
    <img src="images/IT.jpg" style="width:100%">
    <div class="text">IT</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">6 / 10</div>
    <img src="images/Logan.jpg" style="width:100%">
    <div class="text">Logan</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">7 / 10</div>
    <img src="images/homecoming.jpg" style="width:100%">
    <div class="text">Spider-Man: Homecoming</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">8 / 10</div>
    <img src="images/Star.jpg" style="width:100%">
    <div class="text">Star Wars: The Force Awakens</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">9 / 10</div>
    <img src="images/Thor.jpg" style="width:100%">
    <div class="text">Thor: Ragnarok</div>
  </div>

 <div class="mySlides fade">
    <div class="numbertext">10 / 10</div>
    <img src="images/Wonder.jpg" style="width:100%">
    <div class="text">Wonder Woman</div>
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
</div>
<br>

<!-- The dots/circles -->
<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span>
  <span class="dot" onclick="currentSlide(2)"></span>
  <span class="dot" onclick="currentSlide(3)"></span>
  <span class="dot" onclick="currentSlide(4)"></span>
  <span class="dot" onclick="currentSlide(5)"></span>
  <span class="dot" onclick="currentSlide(6)"></span>
  <span class="dot" onclick="currentSlide(7)"></span>
  <span class="dot" onclick="currentSlide(8)"></span>
  <span class="dot" onclick="currentSlide(9)"></span>
  <span class="dot" onclick="currentSlide(10)"></span>
</div>

<script>
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
  var dots = document.getElementsByClassName("dot");
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
}
</script>

</body>
</html>

