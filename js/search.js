function quitarAcentos(str) {
  const acentos = {
    á: "a",
    é: "e",
    í: "i",
    ó: "o",
    ú: "u",
    Á: "A",
    É: "E",
    Í: "I",
    Ó: "O",
    Ú: "U",
  };
  let arr = str
    .split("")
    .map((letra) => acentos[letra] || letra)
    .join("");
  return arr.toString();
}

document.addEventListener("keyup", (e) => {
  if (e.target.matches(".search")) {
    if (e.key === "Escape") e.target = "";

    document.querySelectorAll(".card").forEach((producto) => {
      quitarAcentos(producto.textContent.toLowerCase()).includes(
        quitarAcentos(e.target.value.toLowerCase())
      )
        ? producto.classList.remove("filtro")
        : producto.classList.add("filtro");
    });
  }
});
function increase(c, p, l) {
  c.querySelector(".cant--inputs_field").value++;
  cantidad(c, p, l);
}

function decrease(c, p) {
  if (c.querySelector(".cant--inputs_field").value == 0) {
    return;
  }
  c.querySelector(".cant--inputs_field").value--;

  cantidad(c, p);
}

function cantidad(c, p, l) {
  let product = c.querySelector(".cant--inputs_field").value;

  if (c.querySelector(".cant--inputs_field").value <= 0) {
    c.querySelector(".cant--inputs_field").value = 0;
    product = 1;
  } else if (product > l) {
    c.querySelector(".cant--inputs_field").value = l;
    product = l;
  }

  c.querySelector(".card_precio").innerText = `${p * product} $`;
  if (c.querySelector(".cant--inputs_field").value > 1) {
    c.querySelector(".card_unidad").style.opacity = 0;
  } else {
    c.querySelector(".card_unidad").style.opacity = 1;
  }
}
