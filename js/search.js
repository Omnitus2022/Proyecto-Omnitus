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
function increase(c) {
  c.getElementsByClassName("cant--inputs_field")[0].value++;
}

function decrease(c) {
  if (c.getElementsByClassName("cant--inputs_field")[0].value == 0) {
    return;
  }
  c.getElementsByClassName("cant--inputs_field")[0].value--;
}
