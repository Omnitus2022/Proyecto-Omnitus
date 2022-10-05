document.addEventListener("keyup", (e) => {
  if (e.target.matches(".search")) {
    if (e.key === "Escape") e.target = "";

    document.querySelectorAll(".card").forEach((producto) => {
      producto.textContent.toLowerCase().includes(e.target.value.toLowerCase())
        ? producto.classList.remove("filtro")
        : producto.classList.add("filtro");
    });
  }
});
function increase(c, p) {
  c.getElementsByClassName("cant--inputs_field")[0].value++;
  cantidad(c, p);
}

function decrease(c, p) {
  if (c.getElementsByClassName("cant--inputs_field")[0].value == 0) {
    return;
  }
  c.getElementsByClassName("cant--inputs_field")[0].value--;

  cantidad(c, p);
}

function cantidad(c, p) {
  let product = c.getElementsByClassName("cant--inputs_field")[0].value;

  if (c.getElementsByClassName("cant--inputs_field")[0].value == 0) {
    product = 1;
  }

  c.getElementsByClassName("card_precio")[0].innerText = `${p * product} $`;
  if (c.getElementsByClassName("cant--inputs_field")[0].value > 1) {
    c.getElementsByClassName("card_unidad")[0].style.opacity = 0;
  } else {
    c.getElementsByClassName("card_unidad")[0].style.opacity = 1;
  }
}
