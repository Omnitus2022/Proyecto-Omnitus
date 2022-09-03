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
        <li class="nav__box--item"><a href="#">Contacto</a></li>
        <li class="nav__box--item" id="open_modal"><a href="#">Login</a> </li>
        <li class="nav__box--item"><a href="catalogo.php">Catalogo</a></li>
      </ul>
      <button class="nav__switchTheme">
        <img name="switchTheme" src="svg/moon.svg" />
      </button>
    </nav>
    <!--    LOG-IN    -->
  
    <dialog class="modal">

    <!--    SIGN-UP    -->

    <svg class="close_modal clickable" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><!--! Font Awesome Pro 6.1.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M310.6 361.4c12.5 12.5 12.5 32.75 0 45.25C304.4 412.9 296.2 416 288 416s-16.38-3.125-22.62-9.375L160 301.3L54.63 406.6C48.38 412.9 40.19 416 32 416S15.63 412.9 9.375 406.6c-12.5-12.5-12.5-32.75 0-45.25l105.4-105.4L9.375 150.6c-12.5-12.5-12.5-32.75 0-45.25s32.75-12.5 45.25 0L160 210.8l105.4-105.4c12.5-12.5 32.75-12.5 45.25 0s12.5 32.75 0 45.25l-105.4 105.4L310.6 361.4z"/></svg>


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

        <input type="password" name="pwd" class="log-input" placeholder="Contraseña">
        

          <label>
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89.63 122.88"><title>Enviar</title><path d="M33.27,68.66H7.15a7.23,7.23,0,0,1,0-14.45H33.27l-8.48-9.46a7.25,7.25,0,0,1,.5-10.16,7.07,7.07,0,0,1,10.06.5L54.62,56.61a7.25,7.25,0,0,1-.06,9.72L35.35,87.78a7.07,7.07,0,0,1-10.06.5,7.25,7.25,0,0,1-.5-10.16l8.48-9.46Zm16.25,54.08a7.22,7.22,0,1,1-2.83-14.17l3.39-.67c16.33-3.24,25.1-5.09,25.1-27.69V40.63c0-21-9.34-22.76-24.8-25.65l-3.63-.68A7.21,7.21,0,1,1,49.46.13L53,.81c22.82,4.26,36.6,6.84,36.6,39.82V80.21c0,34.43-12.84,37.11-36.74,41.85l-3.37.68Z"/></svg>
            <input type="submit" name="login" class="env-log " value="Enviar">
          </label>

      </form>
    </div>

    <h3 class="title_modal"><a href="#" class="btn-log clickable">LOGIN</a> <a href="#" class="btn-registro clickable">REGISTRO</a></h3>

    </dialog>