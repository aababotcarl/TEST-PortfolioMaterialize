<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>MiinowChan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

  <!--Import Google Icon Font-->
  <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="css/materialize.min.css">
  <!-- main css -->
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <!-- ========================== Navigation ==========================  -->
  <div class="navbar-fixed">
    <nav>
      <div class="nav-wrapper white">
        <a href="#" data-activates="mobile-demo" class="button-collapse right"><i class="material-icons">menu</i></a>
        <ul class="right hide-on-med-and-down table-of-contents">
          <li><a href="#aboutwrap" class="page-scroll">À propos</a></li>
          <li><a href="#portfoliowrap" class="page-scroll">Portfolio</a></li>
          <li><a href="#contactwrap" class="page-scroll">Contact</a></li>
        </ul>
        <ul class="side-nav" id="mobile-demo">
          <li><a href="#homewrap" class="page-scroll">Accueil</a></li>
          <li><a href="#aboutwrap" class="page-scroll">À propos</a></li>
          <li><a href="#portfoliowrap" class="page-scroll">Portfolio</a></li>
          <li><a href="#contactwrap" class="page-scroll">Contact</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <!-- =============================== About ===============================  -->
  <div class="aboutwrap container scrollspy" id="aboutwrap">
    <div class="row">
      <div class="col m12">
        <h2 class="green-text text-lighten-1">"Lorem Ipsum"</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit!</p>
      </div>
      <div class="col m12 profil-img">
        <div class="parallax-container">
          <div class="parallax"><img src="img/profil.png"></div>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center green-text text-lighten-1"><i class="material-icons">grade</i></h2>
          <h5 class="center">lorem</h5>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center green-text text-lighten-1"><i class="material-icons">group</i></h2>
          <h5 class="center">lorem</h5>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>

      <div class="col s12 m4">
        <div class="icon-block">
          <h2 class="center green-text text-lighten-1"><i class="material-icons">settings</i></h2>
          <h5 class="center">lorem</h5>

          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
      </div>
    </div>
  </div>

  <!-- ============================= Portfolio =============================  -->
  <div class="portfoliowrap container scrollspy" id="portfoliowrap">
    <div class="row">
      <div class="col m12">
        <h2 class="green-text text-lighten-1 text-right">Portfolio</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#">+ d'info</a></p>
      </div>

      <div class="col m12">
        <ul id="portfolio-filter">
          <li><a href="#all" title="">All</a></li>
          <li><a href="#logo" title="" rel="logo">Logo</a></li>
          <li><a href="#documenet" title="" rel="document">Document</a></li>
          <li><a href="#site" title="" rel="site">Site</a></li>
          <li><a href="#illustration" title="" rel="illustration">Illustration</a></li>
          <li><a href="#perso" title="" rel="perso">Perso</a></li>
        </ul>
      </div>
    </div>

    <div class="row" id="portfolio">
      <div class="col s6 m4 l3 box">
        <img class="materialboxed  waves-effect waves-light" src="portfolio/crea/1.png">
      </div>

      <div class="col s6 m4 l3 box">
        <img class="materialboxed  waves-effect waves-light" src="portfolio/crea/2.png">
      </div>

      <div class="col s6 m4 l3 box">
        <img class="materialboxed  waves-effect waves-light" src="portfolio/crea/3.png">
      </div>

      <div class="col s6 m4 l3 box">
        <img class="materialboxed  waves-effect waves-light" src="portfolio/crea/4.png">
      </div>

      <div class="col s6 m4 l3 box">
        <img class="materialboxed  waves-effect waves-light" src="portfolio/crea/5.jpeg">
      </div>

      <div class="col s6 m4 l3 box">
        <img class="materialboxed  waves-effect waves-light" src="portfolio/crea/6.png">
      </div>

      <div class="col s6 m4 l3 box">
        <img class="materialboxed  waves-effect waves-light" src="portfolio/crea/7.png">
      </div>
    </div>
  </div>

  <!-- ============================= Contact =============================  -->
  <div class="contactwrap container scrollspy" id="contactwrap">
    <div class="row">
      <div class="col m12">
        <h2 class="green-text text-lighten-1">Contact</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. <a href="#">+ d'info</a></p>
      </div>
    </div>

    <div class="row">

        <div class="col s0 m3"><!-- para -->
          <div class="parallax-container">
            <div class="parallax"><img src="img/profil.png"></div>
          </div>
        </div>

        <div class="col s12 m6"><!-- form -->
          <div class="row">
            <div class="input-field col s12 m6">
              <input id="first_name" type="text" class="validate">
              <label for="first_name">Nom</label>
            </div>
            <div class="input-field col s12 m6">
              <input id="last_name" type="text" class="validate">
              <label for="last_name">Prénom</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="email" type="email" class="validate">
              <label for="email">Email</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <input id="title" type="text" class="validate">
              <label for="title">Titre</label>
            </div>
          </div>

          <div class="row">
            <div class="input-field col s12">
              <textarea id="message" type="text" class="materialize-textarea"></textarea>
              <label for="message">Message</label>
            </div>
          </div>

          <div class="row">
            <a href="#!" id="download-button" class="btn-large waves-effect waves-light light-green">envoyer</a>
          </div>
        </div>

        <div class="col s0 m3"><!-- para -->
          <div class="parallax-container">
            <div class="parallax"><img src="img/profil.png"></div>
          </div>
        </div>

    </div>
    <div class="row">
      <div class="col m12">
        <p>
          Copyright © 2016 - All Rights Reserved - Hélène "MiinowChan" Papin <br>
          <img src="" alt="FB" /> <img src="" alt="DA" /> <img src="" alt="GB" />
        </p>
      </div>
    </div>
  </div>

  <!-- Jquery -->
  <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.5/js/materialize.min.js"></script>
  <!-- Materialize -->
  <script src="js/materialize.min.js"></script>
  <!-- My Script -->

  <script type="text/javascript">
  $(document).ready(function(){
    $('.parallax').parallax();
    $('.scrollspy').scrollSpy();
  });
  </script>


</body>
</html>
