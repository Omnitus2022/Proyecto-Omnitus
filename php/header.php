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
  <script>
    let dark = false;

    const darkMode = getComputedStyle(document.body).getPropertyValue("--darkMode");

    function switchTheme() {
      dark = !dark;
      document.body.classList.toggle("dark");
    }

    function osPreferedTheme() {
      if (darkMode == "true") {
        switchTheme();
        darkMode = "";
      }
    }
    osPreferedTheme();
    if (!localStorage.getItem("firstLoad")) {
      localStorage.setItem("firstLoad", true);

      osPreferedTheme();
      if (!localStorage.getItem("darkModeLS")) {
        dark = !dark;
      }
    }
  </script>
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


      <li class="nav__box--item"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 57.569 57.569" style="enable-background:new 0 0 57.569 57.569;" xml:space="preserve">
          <g>
            <path d="M10.553,27.865c0-1.647,0.488-3.231,1.395-4.572c-0.298-0.962-0.452-1.97-0.452-2.969c0-4.308,2.715-8.061,6.651-9.47
		c0.351-3.212,2.411-5.976,5.314-7.299c-1.492-2.415-3.847-3.831-6.018-3.479c-1.569,0.255-2.869,1.321-3.633,2.93
		c-1.375-0.632-2.805-0.737-4.059-0.296C8.394,3.188,7.34,4.21,6.703,5.665c-0.845,1.927-0.846,4.407-0.029,6.765
		c-1.101,0.756-1.924,1.867-2.405,3.26c-0.809,2.339-0.539,5.161,0.74,7.746c0.14,0.282,0.293,0.562,0.46,0.837
		c-1.201,0.781-2.1,1.939-2.582,3.352c-0.766,2.242-0.427,4.884,0.93,7.246c0.623,1.085,1.448,2.068,2.409,2.876
		c-0.321,1.344-0.078,2.821,0.704,4.158c1.093,1.865,3.062,3.13,5.166,3.343c2.818,5.296,6.224,7.998,11.095,10.339
		c-5.787-6.841-9.005-12.507-9.186-21.051C11.875,33.015,10.553,30.516,10.553,27.865z" />
            <path d="M55.083,20.053c0.08-3.894-2.207-7.397-5.751-8.911c-0.517-3.323-3.195-5.92-6.523-6.36
		c-0.03-0.331-0.093-0.661-0.188-0.987c-0.587-2.004-2.354-3.513-4.395-3.755c-1.335-0.159-2.597,0.176-3.64,0.909
		c-0.93-0.615-2.013-0.947-3.123-0.947c-2.859,0-5.235,2.112-5.649,4.858c-3.269,0.66-5.72,3.573-5.72,6.981
		c0,0.183,0.008,0.366,0.022,0.552c-3.79,0.682-6.62,3.975-6.62,7.932c0,1.144,0.247,2.278,0.721,3.321
		c-1.065,1.139-1.663,2.638-1.663,4.22c0,2.364,1.358,4.508,3.445,5.54c-0.092,9.063,3.209,14.565,9.649,21.979l0.363,0.413
		l0.066,0.075c0.976,1.095,2.381,1.697,3.958,1.697c0.273,0,0.542-0.023,0.807-0.057L30.5,56.849
		c-2.149-5.111-3.468-9.649-4.204-13.683c-2.773-0.854-3.972-3.07-4.025-3.172c-0.258-0.488-0.069-1.094,0.419-1.351
		c0.485-0.257,1.088-0.071,1.349,0.414c0.037,0.069,0.619,1.093,1.892,1.791c-0.348-2.617-0.449-5.007-0.348-7.161
		c-0.012-0.109-0.007-0.216,0.018-0.326c0.174-3.079,0.736-5.685,1.478-7.869c-3.369-2.009-3.785-5.749-3.495-7.564
		c0.087-0.545,0.601-0.922,1.145-0.83c0.545,0.087,0.916,0.598,0.831,1.142c-0.025,0.161-0.474,3.478,2.254,5.344
		c0.136-0.315,0.273-0.628,0.415-0.921c2.63-5.428,6.389-8.129,7.844-9.02c-0.003-2.003,1.31-3.743,1.372-3.824
		c0.335-0.439,0.965-0.521,1.401-0.187c0.438,0.335,0.522,0.962,0.188,1.4c-0.223,0.296-0.661,1.033-0.857,1.844
		c2.303-0.261,4.551,1.039,4.665,1.107c0.477,0.281,0.634,0.894,0.354,1.369c-0.187,0.316-0.521,0.492-0.862,0.492
		c-0.173,0-0.347-0.044-0.506-0.138c-0.697-0.407-2.819-1.306-4.273-0.61c-0.253,0.129-1.955,1.045-3.892,3.066
		c3.967-0.289,6.726,0.889,6.865,0.949c0.505,0.223,0.735,0.813,0.514,1.318c-0.165,0.374-0.532,0.598-0.917,0.598
		c-0.133,0-0.269-0.026-0.399-0.084c-0.075-0.032-3.458-1.434-7.942-0.501c-0.898,1.263-1.762,2.777-2.478,4.581
		c-0.002,0.132-0.029,0.266-0.087,0.394c-0.038,0.085-0.089,0.159-0.145,0.227c-0.569,1.559-1.028,3.312-1.304,5.292
		c2.261-1.418,5.113-1.48,5.276-1.482c0.004,0,0.008,0,0.012,0c0.546,0,0.991,0.438,0.999,0.986
		c0.008,0.552-0.434,1.005-0.985,1.014c-0.042,0.001-4.157,0.097-5.557,2.484c-0.098,2.439,0.071,5.162,0.591,8.192
		c0.005,0.023,0.008,0.046,0.011,0.07c0.7,4.039,2.016,8.61,4.197,13.799l0.476,0.918c0.734-0.37,1.366-0.882,1.817-1.512
		c0.753-1.052,0.931-2.328,0.499-3.593c-1.808-5.305-1.752-9.353,0.166-12.033c2.486-3.475,7.664-3.994,10.528-3.994
		c1.475,0,2.488,0.136,2.498,0.138l1.028,0.14l0.103-1.032c0.014-0.136,0.309-3.358-1.571-5.547
		c-0.109-0.127-0.224-0.247-0.342-0.362c0.531-0.119,1.056-0.288,1.572-0.506C52.652,27.113,55.006,23.751,55.083,20.053z" />
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
          <g>
          </g>
        </svg>
        <a href="/Proyecto-Omnitus/php/controllers/catalogo_controller.php">Catálogo</a>
      </li>
      <?php
      if (isset($_SESSION["usu"])) {

        if ((!$_SESSION['esEmpresa'])) {
          echo '<li class="nav__box--item"><a href="/Proyecto-Omnitus/php/controllers/redirect_controller.php">Herramientas</a></li>';
        }
        echo '<li class="nav__box--item"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        width="45.532px" height="45.532px" viewBox="0 0 45.532 45.532" style="enable-background:new 0 0 45.532 45.532;"
        xml:space="preserve">
     <g>
       <path d="M22.766,0.001C10.194,0.001,0,10.193,0,22.766s10.193,22.765,22.766,22.765c12.574,0,22.766-10.192,22.766-22.765
         S35.34,0.001,22.766,0.001z M22.766,6.808c4.16,0,7.531,3.372,7.531,7.53c0,4.159-3.371,7.53-7.531,7.53
         c-4.158,0-7.529-3.371-7.529-7.53C15.237,10.18,18.608,6.808,22.766,6.808z M22.761,39.579c-4.149,0-7.949-1.511-10.88-4.012
         c-0.714-0.609-1.126-1.502-1.126-2.439c0-4.217,3.413-7.592,7.631-7.592h8.762c4.219,0,7.619,3.375,7.619,7.592
         c0,0.938-0.41,1.829-1.125,2.438C30.712,38.068,26.911,39.579,22.761,39.579z"/>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     </svg>
     <a href="/Proyecto-Omnitus/php/controllers/perfil_controller.php">Perfil</a></li>';
        echo '        <li class="nav__box--item svgBtn"><a href="/Proyecto-Omnitus/php/logout.php">
          <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 89.63 122.88"><title>Cerrar Sesión</title><path d="M33.27,68.66H7.15a7.23,7.23,0,0,1,0-14.45H33.27l-8.48-9.46a7.25,7.25,0,0,1,.5-10.16,7.07,7.07,0,0,1,10.06.5L54.62,56.61a7.25,7.25,0,0,1-.06,9.72L35.35,87.78a7.07,7.07,0,0,1-10.06.5,7.25,7.25,0,0,1-.5-10.16l8.48-9.46Zm16.25,54.08a7.22,7.22,0,1,1-2.83-14.17l3.39-.67c16.33-3.24,25.1-5.09,25.1-27.69V40.63c0-21-9.34-22.76-24.8-25.65l-3.63-.68A7.21,7.21,0,1,1,49.46.13L53,.81c22.82,4.26,36.6,6.84,36.6,39.82V80.21c0,34.43-12.84,37.11-36.74,41.85l-3.37.68Z"/></svg>

        </a></li>';
      } else {
        echo '<li class="nav__box--item" id="open_modal"><svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
        viewBox="0 0 285.002 285.002" style="enable-background:new 0 0 285.002 285.002;" xml:space="preserve">
     <g>
       <path d="M279.806,235.505c-0.136-1.772-0.928-3.476-2.227-4.747L165.336,118.515c4.416-10.403,6.747-21.669,6.747-33.312
         c0-22.754-8.875-44.163-24.938-60.266C131.059,8.866,109.665,0,86.898,0C64.12,0,42.763,8.869,26.651,24.95
         c-33.243,33.225-33.25,87.266-0.005,120.488c16.111,16.115,37.475,24.99,60.241,24.99c11.646,0,22.884-2.35,33.312-6.772
         l36.874,36.902c1.534,1.515,3.557,2.319,5.74,2.248l20.095-0.705l-0.656,20.145c-0.062,2.125,0.705,4.193,2.245,5.706
         c1.484,1.512,3.569,2.334,5.685,2.248l20.169-0.689l-0.724,20.123c-0.063,2.127,0.754,4.199,2.238,5.712
         c1.534,1.512,3.321,2.325,5.74,2.251l20.119-0.684l-0.674,20.126c-0.118,2.232,0.822,4.379,2.418,5.903
         c1.472,1.339,3.309,2.06,5.245,2.06c0.278,0,0.563-0.012,0.847-0.037l30.851-3.426c4.169-0.455,7.205-4.175,6.847-8.353
         L279.806,235.505z M76.607,74.915c-9.476,9.466-24.796,9.466-34.252,0c-9.47-9.469-9.47-24.786,0-34.246
         c9.456-9.46,24.771-9.469,34.252-0.003C86.064,50.125,86.058,65.452,76.607,74.915z M253.471,238.075
         c-1.126,1.126-2.635,1.688-4.101,1.688s-2.976-0.563-4.101-1.688l-95.501-95.529c2.659-2.867,5.077-5.885,7.273-9.058l96.429,96.41
         C255.722,232.15,255.722,235.824,253.471,238.075z"/>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     <g>
     </g>
     </svg>
     <a href="#">Login</a> </li>';
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