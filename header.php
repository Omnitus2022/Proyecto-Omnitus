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
    <script src="https://kit.fontawesome.com/fe6b22a47e.js" crossorigin="anonymous"></script>

      
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

<<<<<<< HEAD
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
=======
    <i class="fa-solid fa-xmark close_modal"></i>


    <div class="registro">
      <h1 class="title_modal">Registro</h1>
      <form action="php/altaUsuario.php" method="post" class="form_log">
        <input type="text" name="nom" class="log-input" placeholder="Nombre y Apellido:">

        <input type="text" name="usu" class="log-input" placeholder="Nombre usuario:">

        <input type="text" name="psw" class="log-input" placeholder="Contraseña:">

        <input type="text" name="dir" class="log-input" placeholder="Calle:">

        <input type="text" name="dir" class="log-input" placeholder="Número:">

        <input type="text" name="dir" class="log-input" placeholder="Esquina:">

        <input type="text" name="tel" class="log-input" placeholder="Telefono:">  

>>>>>>> d0b2db7 (Login(trabajo en clase))
        <button name="enviarDatos" class="env-reg">Enviar</button>
      </form>
    </div>


    <!--    SIGN-IN    -->

    <div class="login">
<<<<<<< HEAD
      <h1 class="title_modal">Log-in:</h1>
      <form action="php/altaUsuaio.php" method="post" class="form">
        <input type="text" name="usu" class="log-input" placeholder="Nombre usuario:">
        <br />
        <input type="text" name="psw" class="log-input" placeholder="Contraseña:">
        <br />
=======
      <h1 class="title_modal">Login</h1>
      <form action="php/altaUsuaio.php" method="post" class="form_log">

        <input type="text" name="usu" class="log-input" placeholder="Nombre usuario:">

        <input type="text" name="psw" class="log-input" placeholder="Contraseña:">
        
>>>>>>> d0b2db7 (Login(trabajo en clase))
        <button class="env-log">Enviar</button>
      </form>
    </div>

<<<<<<< HEAD
    <h3 class="title_modal"><a href="#" class="btn-registro">Registro</a> - <a href="#" class="btn-log">Log-in</a></h3>
=======
    <h3 class="title_modal"><a href="#" class="btn-registro">Registro</a> - <a href="#" class="btn-log">Login</a></h3>
>>>>>>> d0b2db7 (Login(trabajo en clase))

    </dialog>