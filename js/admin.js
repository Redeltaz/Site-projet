
window.onscroll = function() {nav()};

const navbar = document.getElementById("navbar");

var sticky = navbar.offsetTop;

function nav() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
} //simple barre de navigation qui s attache en haut de l ecran lorsque l admin scroll