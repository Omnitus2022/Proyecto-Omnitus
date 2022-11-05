<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dowse | <?php echo $TITLE ?></title>
  <link rel="stylesheet" href="/Proyecto-Omnitus/css/resets.css" />
  <link rel="stylesheet" href="/Proyecto-Omnitus/css/variables.css" />
  <link rel="stylesheet" href="/Proyecto-Omnitus/css/style.css" />
  <link rel="stylesheet" href="/Proyecto-Omnitus/css/animations.css" />
  <link rel="stylesheet" href="/Proyecto-Omnitus/css/queries.css" />
  <link rel="icon" href="/Proyecto-Omnitus/svg/logo.svg" />
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
</head>

<body>
  <!--    NAVBAR    -->
  <nav>
    <a href="/Proyecto-Omnitus/index.php" class="logo nav__box"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 86.09 19.75">
        <defs>
          <style>
            .cls-1 {
              fill: #b7dfc9;
            }
          </style>
        </defs>
        <g id="Layer_2" data-name="Layer 2">
          <g id="Layer_1-2" data-name="Layer 1">
            <path class="cls-1 logoPaths" d="M36.93,9.83c0,3-1.51,5.3-5.82,5.3H25.79V4.54h5.32C35.42,4.54,36.93,6.78,36.93,9.83Zm-3.51,0a2.09,2.09,0,0,0-2.31-2.37H29.29V12.2h1.82A2.1,2.1,0,0,0,33.42,9.83Z" />
            <path class="cls-1 logoPaths" d="M37.49,9.83c0-3.39,2.36-5.64,6-5.64s6,2.25,6,5.64-2.36,5.65-6,5.65S37.49,13.22,37.49,9.83Zm8.54,0a2.54,2.54,0,1,0-5.07,0,2.54,2.54,0,1,0,5.07,0Z" />
            <path class="cls-1 logoPaths" d="M49.36,4.54H52.9L54,11.4h.3l1.51-6.86h2.78l1.51,6.86h.3l1.14-6.86h3.54L63.06,15.13H58.35l-1-5.1h-.3l-1,5.1H51.42Z" />
            <path class="cls-1 logoPaths" d="M65.18,11.58h3.13c0,.72.65,1.16,2.16,1.18,1.33,0,2-.37,2-.86,0-.34-.19-.69-1.22-.85l-1.36-.21c-2-.33-4.41-.57-4.41-3.28,0-2.09,1.7-3.37,5.06-3.37,3,0,5.16.84,5.1,3.86H72.47c-.12-.7-.72-1.14-2-1.14-1.16,0-1.64.35-1.64.83,0,.3.19.67,1,.79l1.12.19c2.1.36,5,.42,5,3.32,0,2.3-1.79,3.45-5.42,3.44S65.09,14.33,65.18,11.58Z" />
            <path class="cls-1 logoPaths" d="M76.55,4.54h9.54v2.8H80V8.69h5.83V11H80v1.35h6v2.8H76.55Z" />
            <path class="cls-1" d="M19.75,3.29V19.75S12.27,18,10.33,8.41h0A.46.46,0,0,0,9.87,8a.45.45,0,0,0-.45.36h0C7.47,18,0,19.75,0,19.75V3.29A3.29,3.29,0,0,1,3.29,0H16.45A3.29,3.29,0,0,1,19.75,3.29Z" />
          </g>
        </g>
      </svg>
    </a>
    <ul class="nav__box">
      <li class="nav__box--item"><a href="/Proyecto-Omnitus/index.php">Inicio</a></li>


      <li class="nav__box--item"><a href="/Proyecto-Omnitus/php/controllers/catalogo_controller.php">Catálogo</a></li>
      <?php
      if (isset($_SESSION["usu"])) {

        if ((($_SESSION['esDirectivo'] || $_SESSION['esAdmin'] || $_SESSION['esHuerta'] || $_SESSION['esRepartidor'] || $_SESSION['esInformatico']) && !$_SESSION['esEmpresa'])) {
          echo '<li class="nav__box--item"><a href="/Proyecto-Omnitus/php/controllers/redirect_controller.php">Herramientas</a></li>';
        }
        echo '<li class="nav__box--item"><a href="/Proyecto-Omnitus/php/controllers/perfil_controller.php">Perfil</a></li>';
        echo '        <li class="nav__box--item svgBtn"><a href="/Proyecto-Omnitus/php/logout.php">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89.63 122.88"><title>Cerrar Sesión</title><path d="M33.27,68.66H7.15a7.23,7.23,0,0,1,0-14.45H33.27l-8.48-9.46a7.25,7.25,0,0,1,.5-10.16,7.07,7.07,0,0,1,10.06.5L54.62,56.61a7.25,7.25,0,0,1-.06,9.72L35.35,87.78a7.07,7.07,0,0,1-10.06.5,7.25,7.25,0,0,1-.5-10.16l8.48-9.46Zm16.25,54.08a7.22,7.22,0,1,1-2.83-14.17l3.39-.67c16.33-3.24,25.1-5.09,25.1-27.69V40.63c0-21-9.34-22.76-24.8-25.65l-3.63-.68A7.21,7.21,0,1,1,49.46.13L53,.81c22.82,4.26,36.6,6.84,36.6,39.82V80.21c0,34.43-12.84,37.11-36.74,41.85l-3.37.68Z"/></svg>

        </a></li>';
      } else {
        echo '<li class="nav__box--item" id="open_modal"><a href="#">Login</a> </li>';
      }
      ?>

    </ul>
    <button class="nav__switchTheme">
      <img name="switchTheme" src="/Proyecto-Omnitus/svg/moon.svg" />
    </button>
  </nav>

  <?php
  include($PATH . "php/views/loginModal.php");
  ?>