let i = 0;
let forward = true;
const slidesFp = document.getElementsByClassName("carousel__slide");
const mainView = document.querySelector("section");

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
function checkPosition() {
  let windowY = mainView.scrollTop;

  if (windowY > 0) {
    arrowScroll.classList.add("displayNone");
  } else {
    arrowScroll.classList.remove("displayNone");
  }
  scrollPos = windowY;
}
function debounce(func, wait = 12, immediate = true) {
  let timeout;
  return function () {
    let context = this,
      args = arguments;
    let later = function () {
      timeout = null;
      if (!immediate) func.apply(context, args);
    };
    let callNow = immediate && !timeout;
    clearTimeout(timeout);
    timeout = setTimeout(later, wait);
    if (callNow) func.apply(context, args);
  };
}

mainView.addEventListener("scroll", debounce(checkPosition));

setTimeout("chImg()", 5000);
