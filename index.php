<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="slideshow-container">

<div class="mySlides fade">
    <iframe style="border: solid 1px #777;" src="https://calendar.google.com/calendar/embed?height=800&amp;wkst=1&amp;bgcolor=%23ffffff&amp;ctz=Asia%2FJakarta&amp;src=Y185NjIyYWwzZDJhNTVpMm9uOWZ1b2Z0dThoa0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y19iYm1yMjVodWhocWszY2szNDhkMWc0MzhqOEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y19zZmplNG4yYW1yczIxdTU5YmtkbnJhbXVwc0Bncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;src=Y192YXEybDFuOGM5bGNwNTV0bGt2cXFiYTNlNEBncm91cC5jYWxlbmRhci5nb29nbGUuY29t&amp;color=%23D50000&amp;color=%230B8043&amp;color=%238E24AA&amp;color=%23A79B8E&amp;title=Jadwal%20Kegiatan%20LPMP&amp;showTabs=1&amp;showTz=0&amp;showNav=1" width="1120" height="600" frameborder="0" scrolling="no"></iframe>
</div>

<div class="mySlides fade">
    <iframe style="border: solid 1px #777;" src="https://docs.google.com/spreadsheets/d/e/2PACX-1vT5mQOvVzV6iRNL5rm6xrSf3mrrVcUP9WwbNAdI3wyijsAkMQeQe4nwy48jGI_AGkAg0JKpuwZ4RVet/pubhtml" width="1120" height="600" frameborder="0" scrolling="no"></iframe>
</div>

</div>
<br>

<div style="text-align:center; visibility: hidden;">
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 300000); // Change image every 2 seconds
}
</script>

</body>
</html> 
