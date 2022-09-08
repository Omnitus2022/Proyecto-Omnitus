let i = 0;
let forward = true;
const slidesFp = document.getElementsByClassName("carousel__slide");
var arraySlides = [].slice.call(slidesFp, 0);
arraySlides.reverse();
function chImg() {
  if (forward) {
    arraySlides[i].classList.toggle("hide");
  } else {
    slidesFp[i].classList.toggle("hide");
  }

  if (i < 2) {
    i++;
  } else {
    i = 0;
    forward = !forward;
  }
  setTimeout("chImg()", 5000);
}
setTimeout("chImg()", 5000);
