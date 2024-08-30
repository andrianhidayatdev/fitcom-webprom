let index = 0;
const imgElement = document.querySelector("#id-bg-img");

function change() {
  imgElement.classList.add("blur");
  imgElement.classList.add("fade-out");

  setTimeout(() => {
    imgElement.src = images[index];
    imgElement.classList.remove("fade-out");
    imgElement.classList.add("fade-in");

    index = (index + 1) % images.length;

    setTimeout(() => {
      imgElement.classList.remove("fade-in");
      imgElement.classList.remove("blur");
    }, 1000);
  }, 1000);
}

window.onload = function () {
  setInterval(change, 5000);
};
