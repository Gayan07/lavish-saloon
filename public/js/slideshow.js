//slide show function
function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
   //changing the slides
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    //changing dots
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    // Change image every 2 seconds
    slides[slideIndex-1].style.display = "block";
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 4000); // Change image every 2 seconds
}