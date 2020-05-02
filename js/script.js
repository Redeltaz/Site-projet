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

const Fond = {
    imgFond: [
        "Jonathan.png",
        "Joseph.png",
        "Jotaro.png",
        "Josuke.png",
        "Giorno.png",
        "Jolyne.png",
        "Johnny.png",
        "Josefumi.png"
    ],
    radioBtn: [],
    create: function () {
        const oBody = document.querySelector("body");
        this.imgFond.reverse();
        this.imgFond.forEach((img) => {
            const oFond = document.createElement("DIV");
            const oCheck = document.createElement("INPUT");
            oCheck.type = "radio";
            oCheck.name = "fond-scroll-radio";
            oFond.className = "fond-scroll";
            oFond.style.backgroundImage = "url(img/fond-perso/" + img + ")";
            oBody.insertBefore(oFond, oBody.firstElementChild);
            oBody.insertBefore(oCheck, oFond);
            this.radioBtn.push(oCheck);
        });
        this.radioBtn.reverse();
        this.radioBtn[0].click();
        this.setEvent();
    },
    setEvent: function () {
        document.addEventListener("DOMContentLoaded", () => {
            const oHtml = document.querySelector("html");
            const nbrFond = this.radioBtn.length || 1;
            window.addEventListener("scroll", () => {
                const heightScroll = oHtml.scrollHeight - window.innerHeight;
                const posX = window.pageYOffset;
                const step = heightScroll / nbrFond;
                const numFond = Math.min(parseInt(posX / step, 10), nbrFond - 1);
                this.radioBtn[numFond].click();
            });
        });
    }
};
Fond.create();

/*---------------------------------block-mentions-légales----------------------------*/
var mentionBlock = document.getElementById("change-js");


$(".mention").click(function () {
    mentionBlock.style.display = "block";
});

$(".close").click(function () {
    mentionBlock.style.display = "none";
});

window.onclick = function (event) {
    if (event.target == mentionBlock) {
        mentionBlock.style.display = "none";
    }
}

/*-------------------------------blok-contact-------------------------------------*/

var contactBlock = document.getElementById("change-js2");


$(".contact").click(function () {
    contactBlock.style.display = "block";
});

$(".close2").click(function () {
    contactBlock.style.display = "none";
});

window.onclick = function (event) {
    if (event.target == contactBlock) {
        contactBlock.style.display = "none";
    }
};

function verif() {
    var valueName = document.getElementsByClassName('name')[0].value;
    var valueEmail = document.getElementsByClassName('email')[0].value;
    var valueMsg = document.getElementsByClassName('msg')[0].value;

    if (valueName != "" && valueEmail != "" && valueMsg != "") {
        alert("Votre message sera reçu et lu dans les plus bref délais.");
    } else {
        alert("Tous les champs ne sont pas remplis");
    }
}