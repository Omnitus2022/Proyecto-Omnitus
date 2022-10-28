const catalogo = () => {
  $(".shoppingCart__product-remove > button").click(function () {
    let cId = this;
    console.log(cId);
  });
  $(".button_card").click(function () {
    let cId = this.attributes["card-id"].value;
    let cNom = this.attributes["card-nom"].value;
    let cQty = $("#" + cId + " .cant_cat")[0].value;
    if (cQty != 0) {
      $(".shoppingCart").load("./carrito.php", {
        id: cId,
        nombre: cNom,
        cantidad: cQty,
      });
    }
  });

  $(".shoppingCart").load("./carrito.php");
};
$(document).ready(catalogo);
