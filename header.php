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
    <link
      href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@700&display=swap"
      rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;400;700&display=swap" rel="stylesheet"> 
    <script src="https://kit.fontawesome.com/fe6b22a47e.js" crossorigin="anonymous"></script>

      
  </head>
  <body>
    <!--    NAVBAR    -->
    <nav>
      <div class="logo nav__box"><img src="svg/dowselightNobgPng.png" /></div>
      <ul class="nav__box">
        <li class="nav__box--item"><a href="index.php">Inicio</a></li>
        <li class="nav__box--item">Contacto</li>
        <li class="nav__box--item" id="open_modal">Login</li>
        <li class="nav__box--item"><a href="catalogo.php">Catalogo</a></li>
      </ul>
      <button class="nav__switchTheme">
        <img name="switchTheme" src="svg/moon.svg" />
      </button>
    </nav>
    <!--    LOG-IN    -->
  
    <dialog class="modal">

    <!--    SIGN-UP    -->

    <i class="fa-solid fa-xmark close_modal clickable"></i>


    <div class="registro">
      <h1 class="title_modal">Registro</h1>
      <form action="php/altaUsuario.php" method="post" class="form_log">
        <input type="text" name="nom" class="log-input" placeholder="Nombre y Apellido">

        <input type="text" name="usu" class="log-input" placeholder="Nombre usuario">

        <input type="text" name="psw" class="log-input" placeholder="Contraseña">

        <input type="text" name="dir" class="log-input" placeholder="Calle">

        <input type="text" name="dir" class="log-input" placeholder="Número">

        <input type="text" name="dir" class="log-input" placeholder="Esquina">

        <input type="text" name="tel" class="log-input" placeholder="Telefono">  

        <button name="enviarDatos" class="env-reg">Enviar</button>
      </form>
    </div>


    <!--    SIGN-IN    -->
 
    <div class="login">
    <h1 class="title_modal">Login</h1>
      <form action="php/login.php" method="post" class="form_log">

        <input type="text" name="usu" class="log-input" placeholder="Nombre usuario">

        <input type="text" name="pwd" class="log-input" placeholder="Contraseña">
        
        <input type="submit" name="login" class="env-log " value="Enviar">
      </form>
    </div>

    <h3 class="title_modal"><a href="#" class="btn-log clickable">LOGIN</a> <a href="#" class="btn-registro clickable">REGISTRO</a></h3>

    </dialog>