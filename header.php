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

        <input type="text" name="pwd" class="log-input" placeholder="Contraseña">
        
        <div class="modal_container">
          <select class="option_modal" name="" id="">
            <option value="">A</option>
            <option value="">B</option>
            <option value="">C</option>
            <option value="">D</option>
          </select>
          <label>
          <svg width="24px" height="24px" viewBox="0 0 24 24" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">

            <g id="web-app" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <g id="login" fill="#000000">
                    <path d="M9.58578644,11 L7.05025253,8.46446609 L8.46446609,7.05025253 L13.4142136,12 L8.46446609,16.9497475 L7.05025253,15.5355339 L9.58578644,13 L3,13 L3,11 L9.58578644,11 Z M11,3 C16.3333333,3 19,3 19,3 C20.1000004,3 21,3.9000001 21,5 C21,5 21,19 21,19 C21,20.1000004 20.1000004,21 19,21 C19,21 16.3333333,21 11,21 L11,19 L19,19 L19,5 L11,5 L11,3 Z" id="Shape"></path>
                </g>
            </g>
          </svg>
            <input type="submit" name="login" class="env-log " value="Enviar">
          </label>
          
        </div>

      </form>
    </div>

    <h3 class="title_modal"><a href="#" class="btn-log clickable">LOGIN</a> <a href="#" class="btn-registro clickable">REGISTRO</a></h3>

    </dialog>