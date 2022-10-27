const catalogo = () => {
  $(".button_card").click(function () {
    const cId = this.attributes["card-id"].value;
    const cNom = this.attributes["card-nom"].value;
    const cQty = $("#" + cId + " .cant_cat")[0].value;
    if (cQty != 0) {
      $(".shoppingCart").load("./carrito.php", {
        id: cId,
        nombre: cNom,
        cantidad: cQty,
      });
    }
  });
};
$(document).ready(catalogo);
