var tlmenu = new TimelineMax({
    paused: true
});

tlmenu.to('nav', 0.5, {
        autoAlpha: 1
    })
    .staggerFromTo('.menu-anim', 0.4, {
        y: -50,
        opacity: 0
    }, {
        y: 0,
        opacity: 1
    }, 0.2);

$('.menu-act').on('click', function () {
    $('.menu').toggleClass('menu2');
    $('.menu-act').toggleClass('menu-act2');
    $('.triangle').toggleClass('triangle2');
    $('.ul-menu').toggleClass('ongletMobile');
    /*
        tlmenu.staggerFrom('.menu-anim', 0.5, {x:0,y:-50, opacity:0},0.2);
    */
    tlmenu.play(0);
});

$('.menu-act2').on('click', function () {
    tlmenu.reverse(0);
});

var images = new Array();
images.push("img/jojo-family1.jpg");
images.push("img/jojo-family2.jpg");
images.push("img/jojo-family3.jpg");
images.push("img/jojo-family4.jpg");

var compteur = 0;

function ChangerImage() {
    document.getElementById("family").src = images[compteur];

    if (compteur < 3) {
        compteur++;
    } else {
        compteur = 0;
    }

    window.setTimeout("ChangerImage()", 2500)
}

// Charge la fonction
window.onload = function () {
    ChangerImage();
}