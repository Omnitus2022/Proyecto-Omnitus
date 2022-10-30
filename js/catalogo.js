const catalogo = () => {
  $(".bottomArea").on("click", ".shoppingCart__product-remove", function () {
    $(".shoppingCart").load("../models/quitarCarrito.php", {
      id: $(this).attr("productId"),
    });
  });

  $(".button_card").click(function () {
    let cId = this.attributes["card-id"].value;
    let cNom = this.attributes["card-nom"].value;
    let cPrc = $("#" + cId + " .card_precio")[0].innerText;

    let cQty = $("#" + cId + " .cant_cat")[0].value;
    if (cQty != 0) {
      $(".shoppingCart").load("../models/agregarCarrito.php", {
        id: cId,
        nombre: cNom,
        cantidad: cQty,
        precio: cPrc.slice(0, -2),
      });
    }
  });
  $(".shoppingCart").load("../models/carrito.php");
};
$(document).ready(catalogo);
