window.onscroll = function () {
  makeSticky();
};

function makeSticky() {
  var navbar = document.getElementById("navbar");
  var stickyPoint = navbar.offsetHeight;

  if (window.pageYOffset > stickyPoint) {
    navbar.classList.add("fixed-top");
    navbar.classList.add("background-nav");
    navbar.classList.add("slide-in");
  } else {
    navbar.classList.remove("background-nav");
    navbar.classList.remove("slide-in");
    navbar.classList.remove("fixed-top");
  }
}
