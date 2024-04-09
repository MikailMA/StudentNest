<?php
session_start();

// Definieer de namen van gebruikers die toegang moeten hebben tot de speciale link
$toegestane_gebruikers = array("mikail", "julius", "fons");
?>

<?php 

require_once 'connection.php';
require_once 'sorteeraanbod.php';


// Zoek systeem voor de aanbod pagina!
if(isset($_POST['sorteer']) && isset($_POST['zoekwoord'])) { 
  $zoekwoord = $_POST['zoekwoord'];
  $sort = $_POST['sorteer'];

  $sql = "SELECT * FROM goodhous WHERE plaats LIKE '%$zoekwoord%' or straat LIKE '%$zoekwoord%' ORDER BY $sort";


} elseif (isset($_POST['zoekwoord'])) {
  $zoekwoord = $_POST['zoekwoord'];
  $sql = "SELECT * FROM goodhous WHERE plaats LIKE '%$zoekwoord%' or straat LIKE '%$zoekwoord%'";

} elseif (isset($_POST['sorteer'])){
  $sort = $_POST['sorteer'];
  $sql = "SELECT * FROM goodhous ORDER BY $sort";
} else {
  $sql = "SELECT * FROM goodhous";
}

$all_houses = $conn->query($sql);

?>


<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <title>StudentNest - Aanbod</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">

    

<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
        .navbar {
        padding-left: 0px;
        padding-left: 0px;
        height: 2.2rem;
      }
      }

      .b-example-divider {
        width: 100%;
        height: 3rem;
        background-color: rgba(0, 0, 0, .1);
        border: solid rgba(0, 0, 0, .15);
        border-width: 1px 0;
        box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
      }

      .b-example-vr {
        flex-shrink: 0;
        width: 1.5rem;
        height: 100vh;
      }

      .bi {
        vertical-align: -.125em;
        fill: currentColor;
      }

      .nav-scroller {
        position: relative;
        z-index: 2;
        height: 2.75rem;
        overflow-y: hidden;
      }

      .nav-scroller .nav {
        display: flex;
        flex-wrap: nowrap;
        padding-bottom: 1rem;
        margin-top: -1px;
        overflow-x: auto;
        text-align: center;
        white-space: nowrap;
        -webkit-overflow-scrolling: touch;
      }

      .btn-bd-primary {
        --bd-violet-bg: #712cf9;
        --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

        --bs-btn-font-weight: 600;
        --bs-btn-color: var(--bs-white);
        --bs-btn-bg: var(--bd-violet-bg);
        --bs-btn-border-color: var(--bd-violet-bg);
        --bs-btn-hover-color: var(--bs-white);
        --bs-btn-hover-bg: #6528e0;
        --bs-btn-hover-border-color: #6528e0;
        --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
        --bs-btn-active-color: var(--bs-btn-hover-color);
        --bs-btn-active-bg: #5a23c8;
        --bs-btn-active-border-color: #5a23c8;
      }

      .bd-mode-toggle {
        z-index: 1500;
      }

      .bd-mode-toggle .dropdown-menu .active .bi {
        display: block !important;
      }
     
      .navbar {
        height: 4.5rem;
        padding-left: 20px;
      }

      .navbar ul{
        padding-left: 20px;
      }

      
      .navbar-brand{
        font-size: 140%;
      }
/* Custom font :) */
      @import url("https://fonts.googleapis.com/css2?family=Poppins:weight@100;200;300;400;500;600;700;800&display=swap");


      .container {
        /* background-color:#eee; */
        font-family: "Poppins", sans-serif;
        font-weight: 300;
       }

       .height{
        height: 30vh;
       }
       

       .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
         
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid gray;


       }


       .search input:focus{

        box-shadow: none;
        border: 2px solid blue;


       }

       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;

       }

       .search button{

        position: absolute;
        top: 5px;
        right: 5px;
        height: 50px;
        width: 110px;
        background: black;

       }

       a{
        text-decoration: none;
        color: black;
       }

       body {
        color: black !important;
       }

       .navbar{
        color: black !important;
       }
       .search button:hover {
            background: #1B1A1A;
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

    .navbar{
      margin-bottom: 30px;
    }
}

    </style>

    
    <main class="bg-light text-dark">

</head>
<body>
<nav class="navbar navbar-expand-md navbar-light ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">StudentNest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">

          <li class="nav-item">
            <a class="nav-link link-dark" href="aanbod.php">Aanbod</a>
          </li>

          <li class="nav-item">
            <a class="nav-link link-dark" href="verhuur.php">Verhuur</a>
          </li>

          <?php
          // Controleren of de huidige gebruiker is ingelogd en in de lijst met toegestane gebruikers staat
          if (isset($_SESSION['gebruikersnaam']) && in_array($_SESSION['gebruikersnaam'], $toegestane_gebruikers)) {
              echo '<li class="nav-item">
                      <a class="nav-link link-dark" href="huizencheck.php">Goedkeuring</a>
                    </li>';
          }
          ?>

          <?php
          // Controleren of de gebruiker is ingelogd en de logout-knop weergeven
          if (isset($_SESSION['gebruikersnaam'])) {
              echo '<li class="nav-item">
                      <a class="nav-link link-dark" href="logout.php">Logout</a>
                    </li>';
          } else {
              // Als de gebruiker niet is ingelogd, toon de signup-knop
              echo '<li class="nav-item">
                      <a class="nav-link link-dark" href="signup.php">Signup</a>
                    </li>';
          }
          ?>
          
          <?php
          // Controleren of de gebruiker niet is ingelogd en de login-knop weergeven
          if (!isset($_SESSION['gebruikersnaam'])) {
              echo '<li class="nav-item">
                      <a class="nav-link link-dark" href="login.php">Login</a>
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
    height: 100%;
    font-family: 'Gabarito', cursive;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
  }

</style>

<!-- BEGIN PAGINA AANBOD -->


<!-- Filter systeem hieronder -->
  <section class="text-center container">
<div class="row  d-flex justify-content-center align-items-center">

  <div class="col-md-4">

  <form action="" method="post">
    <div class="search">
      <i class="fa fa-search"></i>
      <input type="text" class="form-control" name="zoekwoord" placeholder="Zoek op plaats, wijk of straat... ">
      <button type="submit" class="btn text-white">Zoeken</button>
      <select name="sorteer" id="sorteer">
  <option value="prijshuur ASC">Huur oplopend</option>
  <option value="prijshuur DESC">Huur aflopend</option>
  <option value="vierkantemeter ASC">m2 oplopend</option>
  <option value="vierkantemeter DESC">m2 aflopend</option>
  <option value="datum DESC">Nieuwste kamers</option>
  <option value="datum ASC">Oudste kamers</option>
</select>
    </div>
  </div>

  </section>

  <div class="album py-5 bg-light">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">

      <?php 
      // While-loop om alle woningen weer te geven
      while($row = mysqli_fetch_assoc($all_houses)){

      ?>

        <div class="col">

          <div class="card shadow-sm">
          <img width="100%" height="225" src='uploads/<?php echo $row["link"] ?>' title="Woning" frameborder="0"  allowfullscreen></img>
            <!-- Card om de woning op weer te geven -->
            <div class="card-body">
              <p class="card-text"><?php echo $row["samenvatting"] ?></p>
              <div class="d-flex justify-content-between align-items-center">
              <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-secondary"><a href="woning.php?id=<?php echo $row["house_id"] ?>">Meer</a></button>
                </div>
              <small class="text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-currency-euro" viewBox="0 0 16 16">
  <path d="M4 9.42h1.063C5.4 12.323 7.317 14 10.34 14c.622 0 1.167-.068 1.659-.185v-1.3c-.484.119-1.045.17-1.659.17-2.1 0-3.455-1.198-3.775-3.264h4.017v-.928H6.497v-.936c0-.11 0-.219.008-.329h4.078v-.927H6.618c.388-1.898 1.719-2.985 3.723-2.985.614 0 1.175.05 1.659.177V2.194A6.617 6.617 0 0 0 10.341 2c-2.928 0-4.82 1.569-5.244 4.3H4v.928h1.01v1.265H4v.928z"/>
</svg> 
<?php echo $row["prijshuur"] ?>p/m</small>
              <small class="text"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bounding-box-circles" viewBox="0 0 16 16">
  <path d="M2 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM0 2a2 2 0 0 1 3.937-.5h8.126A2 2 0 1 1 14.5 3.937v8.126a2 2 0 1 1-2.437 2.437H3.937A2 2 0 1 1 1.5 12.063V3.937A2 2 0 0 1 0 2zm2.5 1.937v8.126c.703.18 1.256.734 1.437 1.437h8.126a2.004 2.004 0 0 1 1.437-1.437V3.937A2.004 2.004 0 0 1 12.063 2.5H3.937A2.004 2.004 0 0 1 2.5 3.937zM14 1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zM2 13a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm12 0a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg> 
<?php echo $row["vierkantemeter"] ?>m2</small>
              <small class="text"> <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
  <path d="M8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10zm0-7a3 3 0 1 1 0-6 3 3 0 0 1 0 6z"/>
</svg> 
<?php echo $row["plaats"] ?></small>
              <small class="text-muted"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg> 
<?php echo $row["voornaam"] ?></small>
          
              </div>
            </div>
          </div>
        </div>
            <?php } ?>

       
        </div>
      
      </div>
      
    </div>
  </div>
</main>


