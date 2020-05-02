/*-----------------------------------slider---------------------------------------*/

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
    var rond = document.getElementsByClassName("rond");

    if (n > slides.length) {
        slideIndex = 1
    }
    if (n < 1) {
        slideIndex = slides.length
    }
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    for (i = 0; i < rond.length; i++) {
        rond[i].className = rond[i].className.replace(" active", "");
    }
    slides[slideIndex - 1].style.display = "block";
    rond[slideIndex - 1].className += " active";
}

/*------------------------------------menu---------------------------------------------*/


$(".menu-act").click(function () {
    $(this).css("display", "none");
    $(".sidenav").css("width", "228px");
    $("body").css("background-color", "rgba(0,0,0,0.4)")
})

$(".croix").click(function () {
    $(".menu-act").css("display", "block");
    $(".sidenav").css("width", "0");
    $("body").css("background-color", "white")
});

/*-------------------------------scroll-background---------------------------------*/
