const catalogo = () => {
  var n = 0;
  $(".button_card").click(function () {
    const cId = this.attributes["card-id"].value;
    const cNom = this.attributes["card-nom"].value;
    const cQty = $("#" + cId + " .cant_cat")[0].value;

    $(".shoppingCart").load("./carrito.php", {
      id: cId,
      nombre: cNom,
      cantidad: cQty,
    });
    n++;
  });
};
$(document).ready(catalogo);
