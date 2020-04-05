/*-----------------------------------slider---------------------------------------*/

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

/*------------------------------------menu---------------------------------------------*/


$(".menu-act").click(function(){
    $(this).css("display", "none");
    $("#IDSidenav").css("width", "255px");
    $("#main").css("margin-left", "250px");
    $("body").css("background-color", "rgba(0,0,0,0.4)")
})

$(".croix").click(function(){
    $(".menu-act").css("display", "block");
    $("#IDSidenav").css("width", "0");
    $("#main").css("margin-left", "0");
    $("body").css("background-color", "white")
});


