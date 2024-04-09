<?php
session_start();

// De namen van gebruikers die toegang moeten hebben tot de Goedkeuring pagina
// gebruikersnaam: fons 
// wachtwoord: fons
// Hiermee kunt u ook inloggen!
$toegestane_gebruikers = array("mikail", "julius", "fons");
?>

  </head>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

  <body>
  <nav class="navbar navbar-expand-md navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">StudentNest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse flex-md-column" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link link-light" href="aanbod.php">Aanbod</a>
          </li>

          <li class="nav-item">
            <a class="nav-link link-light" href="verhuur.php">Verhuur</a>
          </li>

          <?php
          // Controleren of de huidige gebruiker is ingelogd en in de lijst met toegestane gebruikers staat
          if (isset($_SESSION['gebruikersnaam']) && in_array($_SESSION['gebruikersnaam'], $toegestane_gebruikers)) {
              echo '<li class="nav-item">
                      <a class="nav-link link-light" href="huizencheck.php">Goedkeuring</a>
                    </li>';
          }
          ?>

          <?php
          // Controleren of de gebruiker is ingelogd en de logout-knop weergeven
          if (isset($_SESSION['gebruikersnaam'])) {
              echo '<li class="nav-item">
                      <a class="nav-link link-light" href="logout.php">Logout</a>
                    </li>';
          } else {
              // Als de gebruiker niet is ingelogd, toon de signup-knop
              echo '<li class="nav-item">
                      <a class="nav-link link-light" href="signup.php">Signup</a>
                    </li>';
          }
          ?>
          
          <?php
          // Controleren of de gebruiker niet is ingelogd en de login-knop weergeven
          if (!isset($_SESSION['gebruikersnaam'])) {
              echo '<li class="nav-item">
                      <a class="nav-link link-light" href="login.php">Login</a>
                    </li>';
          }
          ?>

        </ul>
        
      </div>
    </div>
  </nav>





  <style> 
@import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@700&display=swap');
    body{
      background-image: url('images/achtergrond.jpg');
      height: 100%;
      font-family: 'Gabarito', cursive;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
    }

    @media (max-width: 768px) {
    .navbar-collapse {
        flex-direction: row !important;
        justify-content: flex-end !important;
    }

    .navbar-nav {
        flex-direction: row !important;
    }

    .navbar-nav .nav-item {
        margin-right: 0.5rem;
    }
}


  </style>