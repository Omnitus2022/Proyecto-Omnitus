<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dowse | Inicio</title>
    <link rel="stylesheet" href="css/resets.css" />
    <link rel="stylesheet" href="css/variables.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/animations.css" />
    <link rel="stylesheet" href="css/queries.css" />
    <link rel="icon" href="svg/logo.svg" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap"
      rel="stylesheet"/>
      
  </head>
  <body>
    <!--    NAVBAR    -->
    <nav>
      <div class="logo nav__box"><img src="svg/dowselightNobgPng.png" /></div>
      <ul class="nav__box">
        <li class="nav__box--item">Inicio</li>
        <li class="nav__box--item">Contacto</li>
        <li class="nav__box--item" id="open_modal">Login</li>
      </ul>
      <button class="nav__switchTheme">
        <img name="switchTheme" src="svg/moon.svg" />
      </button>
    </nav>
    <!--    LOG-IN    -->

    <dialog class="modal">

    <!--    SIGN-UP    -->

    <a class="close_modal">x</a>


    <div class="registro">
      <h1 class="title_modal">Registro:</h1>
      <form action="php/altaUsuario.php" method="post" class="form">
        <br />
        <input type="text" name="nom" class="log-input" placeholder="Nombre y Apellido:">
        <br />
        <input type="text" name="usu" class="log-input" placeholder="Nombre usuario:">
        <br />
        <input type="text" name="psw" class="log-input" placeholder="Contraseña:">
        <br />
        <input type="text" name="dir" class="log-input" placeholder="Calle:">
        <br />
        <input type="text" name="dir" class="log-input" placeholder="Número:">
        <br />
        <input type="text" name="dir" class="log-input" placeholder="Esquina:">
        <br />
        <input type="text" name="tel" class="log-input" placeholder="Telefono:">  
        <br />
        <button name="enviarDatos" class="env-reg">Enviar</button>
      </form>
    </div>


    <!--    SIGN-IN    -->

    <div class="login">
      <h1 class="title_modal">Log-in:</h1>
      <form action="php/altaUsuaio.php" method="post" class="form">
        <input type="text" name="usu" class="log-input" placeholder="Nombre usuario:">
        <br />
        <input type="text" name="psw" class="log-input" placeholder="Contraseña:">
        <br />
        <button class="env-log">Enviar</button>
      </form>
    </div>

    <h3 class="title_modal"><a href="#" class="btn-registro">Registro</a> - <a href="#" class="btn-log">Log-in</a></h3>

    </dialog>