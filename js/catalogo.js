const catalogo = () => {
  $.ajax({
    url: "/Proyecto-Omnitus/php/controllers/session.php",
    type: "POST",
    success: function (result) {
      if (result == "success") {
        console.log("====================================");
        console.log("something");
        console.log("====================================");
      } else {
        document.querySelector(".modal").showModal();
      }
    },
  });
  $(".showCart").css(
    "left",
    "calc(100% - " + $(".showCart").width() + "px - 2.8rem)"
  );
  $(".bottomArea").on("click", ".shoppingCart__product-remove", function () {
    $(".shoppingCart").load("../models/quitarCarrito.php", {
      id: $(this).attr("productId"),
    });
  });

  $(function () {
    $(".showCart").hover(function () {
      $(".shoppingCart").css("left", "0%");
      $(".showCart").css("left", "0%");
    });
  });
  $(function () {
    $(".showCart").click(function () {
      $(".shoppingCart").css("left", "100%");
      $(".showCart").css(
        "left",
        "calc(100% - " + $(".showCart").width() + "px - 2.8rem)"
      );
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
  $(".loadlater").each(async function (index, element) {
    $(element).css("background-image", $(element).data("src"));
  });

  $(".shoppingCart").load("../models/carrito.php");
};
$(document).ready(catalogo);
