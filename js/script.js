var i = 0;
var z = 1;
var d = 0;
var y = 0;
var images = [];
var dark = false;
var darkMode = getComputedStyle(document.body).getPropertyValue("--darkMode");
var time = 5000;

const arrowScroll = document.querySelector(".arrowScroll");
const container = document.querySelector(".main-wrapper__container");
const target = document.querySelectorAll(".invisible");
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      entry.target.classList.toggle("fadeIn", entry.isIntersecting);
    });
    console.log(entries);
  },
  { threshold: 0.6 }
);
target.forEach((element) => {
  observer.observe(element);
});

images[0] = "media/farm1.webp";
images[1] = "media/farm2.jpg";
images[2] = "media/farm3.jpg";
images[3] = "media/farm4.jpg";

function osPreferedTheme() {
  if (darkMode == "true") {
    switchTheme();
    darkMode = "";
  }
}
function switchTheme() {
  chThemeIcon();
  document.body.classList.toggle("dark");
}
function chThemeIcon() {
  if (dark == false) {
    document.switchTheme.src = "svg/sun.svg";
    dark = true;
  } else {
    document.switchTheme.src = "svg/moon.svg";
    dark = false;
  }
}
//scroll arrow
function scrollDown() {
  container.scrollIntoView(true, { block: "end", behavior: "smooth" });
}
//change image auto-slides
function chImg() {
  document.slide2.src = images[y];
  document.slide1.src = images[i];
  if (z < 1) {
    if (y < images.length - 1) {
      y++;
    } else {
      y = 0;
    }
  }
  if (d < 1) {
    if (i < images.length - 1) {
      i++;
    } else {
      i = 0;
    }
  }
  z++;
  d++;
  if (d > 1) {
    d = 0;
  }
  if (z > 1) {
    z = 0;
  }
  setTimeout("chImg()", time);
}
function onLoad() {
  if (
    window.location.href.endsWith("index.php") ||
    window.location.href.endsWith("Proyecto-Omnitus/")
  ) {
    chImg();
  }
  chThemeIcon();
  osPreferedTheme();
}
document.querySelector(".main").addEventListener("scroll", () => {
  console.log("nya");
});
document
  .querySelector(".nav__switchTheme")
  .addEventListener("click", switchTheme);

window.onload = onLoad;
