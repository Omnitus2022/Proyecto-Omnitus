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
