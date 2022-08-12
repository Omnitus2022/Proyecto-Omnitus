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
      <p class="close_modal">x</p>
      <form action="php/altaUsuario.php" method="dialog" class="form">
        <!--    SIGN-UP    -->
        <h1 class="title_modal">Registrate!</h1>
        <br />
        <label>
          Nombre y Apellido:
        </label> 
        <input type="text" name="nom">
        <br />
        <label>
          Nombre usuario:
        </label> 
        <input type="text" name="usu">
        <br />
        <label>
          Contraseña:
        </label>
        <input type="text" name="psw">
        <br />
        <label>
          Dirección:
        </label>
        <input type="text" name="dir">
        <br />
        <label>
          Telefono:
        </label>
        <input type="text" name="tel">  
        <!--    SIGN-IN    -->
      </form>
    </dialog>