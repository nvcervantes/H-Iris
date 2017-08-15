<?php

/* @var $this yii\web\View */

use yii\helpers\Html;

$this->title = 'Wedding Package';
$this->params['breadcrumbs'][] = $this->title;
?>

 <div class="main">
 <h1 style="text-align:center">WEDDING PACKAGES</h1>
       
    </div>

     <div class="body-content">
        <div class="slideshow-container">

  <div class="mySlides">
    <img src="uploads/weddingpackage2.jpg" style="width:100%;height:20%;"> 
  </div>

  <div class="mySlides">
    <img src="uploads/weddingpackage1.jpg" style="width:100%;height:20%;"> 
  </div>

  <div class="mySlides">
    <img src="uploads/weddingpackage.jpg" style="width:100%;height:20%;"> 
  </div> 
</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
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
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
  

</script>
 
 <div>
 <br>
 <a href ="uploads/Pico Wedding by the Sea Menu.pdf"><p style = "text-align:center">Pico Wedding by the Sea Menu</p></a>
 <a href ="uploads/Pico Wedding Packages 2018.pdf"><p style = "text-align:center">Pico Wedding Packages 2018</p></a>
 <a href ="uploads/Pico_Wedding_Menu_FA.pdf"><p style = "text-align:center">Pico Wedding Menu</p></a>
 </div>

 