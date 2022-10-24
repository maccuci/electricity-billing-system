let slideIndex = 1;
showSlides(slideIndex);

function changeSlidesIndex(index) {
    slideIndex += index;
    showSlides(slideIndex);
}

function currentSlide() {
    showSlides(slideIndex);
}

function showSlides(numberSlides) {
    const Slides = document.getElementsByClassName("slides"),
          Dots = document.getElementsByClassName("dot");

    if (numberSlides > Slides.length) { 
        slideIndex = 1
    }
    if (numberSlides < 1) { 
        slideIndex = Slides.length 
    }
    for (i = 0; i < Slides.length; i++) {
        Slides[i].style.display = "none";
    }
    for (i = 0; i < Dots.length; i++) {
        Dots[i].className = Dots[i].className.replace(" active", "");
    }
    Slides[slideIndex - 1].style.display = "block";
    Dots[slideIndex - 1].className += " active";
}