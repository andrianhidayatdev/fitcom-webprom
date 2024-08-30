window.onscroll = function () {
  makeSticky();
};

function makeSticky() {
  var navbar = document.getElementById("navbar");
  var stickyPoint = navbar.offsetHeight;

  if (window.pageYOffset > stickyPoint) {
    navbar.classList.add("slide-in");
    navbar.classList.add("background-nav");
    navbar.classList.remove("background-first");
    navbar.classList.add("fixed-top");
  } else {
    navbar.classList.remove("fixed-top");
    navbar.classList.add("background-first");
    navbar.classList.remove("slide-in");
    navbar.classList.remove("background-nav");
  }
}
