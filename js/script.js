var z = 1;
var d = 0;

const arrowScroll = document.querySelector(".arrowScroll");
const container = document.querySelector(".main-wrapper__container");
const target = document.querySelectorAll(".invisible");
const observer = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (!entry.isIntersecting) {
        return;
      }
      entry.target.classList.add("fadeIn");
      observer.unobserve(entry.target);
    });
  },
  { threshold: 0.2 }
);
target.forEach((element) => {
  observer.observe(element);
});

function switchTheme() {
  chThemeIcon();
  document.body.classList.toggle("dark");
}
function chThemeIcon() {
  if (dark == false) {
    document.switchTheme.src = "/Proyecto-Omnitus/svg/sun.svg";
    localStorage.setItem("darkModeLS", false);

    dark = true;
  } else {
    document.switchTheme.src = "/Proyecto-Omnitus/svg/moon.svg";
    localStorage.setItem("darkModeLS", true);
    dark = false;
  }
}

function scrollDown() {
  container.scrollIntoView(true, { block: "end", behavior: "smooth" });
}
function onLoad() {
  chThemeIcon();
}
document
  .querySelector(".nav__switchTheme")
  .addEventListener("click", switchTheme);

window.onload = onLoad;
