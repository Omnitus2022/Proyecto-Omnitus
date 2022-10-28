const catalogo = () => {
  $(".shoppingCart__product-remove").click(function () {
    let cId = this;
    console.log("cId");
  });
  $(".button_card").click(function () {
    let cId = this.attributes["card-id"].value;
    let cNom = this.attributes["card-nom"].value;
    let cPrc = $("#" + cId + " .card_precio")[0].innerText;
    console.log(cPrc.slice(0, -2));
    let cQty = $("#" + cId + " .cant_cat")[0].value;
    if (cQty != 0) {
      $(".shoppingCart").load("./carrito.php", {
        id: cId,
        nombre: cNom,
        cantidad: cQty,
        precio: cPrc.slice(0, -2)
      });
    }
  });

  $(".shoppingCart").load("./carrito.php");
};
$(document).ready(catalogo);
