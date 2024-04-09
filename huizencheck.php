<?php
session_start();

// Controleren of de gebruiker is ingelogd
if (!isset($_SESSION['gebruikersnaam'])) {
    header('Location: login.php'); // Redirect naar de inlogpagina als niet ingelogd
    exit;
}

// Controleren of de gebruikersnaam overeenkomt met "julius" of "Mikail" of "fons"
$toegestane_gebruikers = array("julius", "mikail", "fons");
if (!in_array($_SESSION['gebruikersnaam'], $toegestane_gebruikers)) {
    echo "<script>
alert('Jij hebt geen toegang tot deze pagina!');
window.location.href='index.php';
</script>";
    exit;
}
?>


<link href="navbar.css" rel="stylesheet">
<link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-expand-md navbar-dark ">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">StudentNest</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExample04">
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
        <!-- <form role="search" method="get" action="aanbod.php">
          <input class="form-control" type="search" placeholder="Search" aria-label="Search" name="zoekwoord">
        </form> -->
        
      </div>
    </div>
  </nav>





  <style> 
@import url('https://fonts.googleapis.com/css2?family=Gabarito:wght@700&display=swap');
    body{
      background-image: url('images/achtergrond.jpg');
      height: 100%;
      font-family: 'Gabarito', cursive;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  color: white;
    }

  </style>

  <!-- HIER BEGINT DE WERK PAGINA -->
<div class="text-center">
  <h2>Welkom op de controle pagina!</h2>
  <h4>Klik aan welke huizen we toevoegen op de pagina en welke niet!</h4>
</div>

<table class="table table-striped bg-light">
  <thead class="thead-dark">
    <tr>
        <th scope="col">house_id</th>
        <th scope="col">voornaam</th>
        <th scope="col">achternaam</th>
        <th scope="col">plaats</th>
        <th scope="col">straat</th>
        <th scope="col">huisnummer</th>
        <th scope="col">email</th>
        <th scope="col">telefoonnummer</th>
        <th scope="col">prijshuur</th>
        <th scope="col">vierkantemeter</th>
        <th scope="col">datum</th>
        <th scope="col">samenvatting</th>
        <th scope="col">link</th>


    </tr>
    </thead>
    <?php
    include "connection.php";

    $query = "SELECT * FROM houses ORDER BY datum DESC";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_assoc($result)) {
        ?>
       <tbody> <tr>
            <td scope="row">
            <?php $house_id = $row["house_id"];echo $row["house_id"]; ?></td>
            <td><?php echo $row["voornaam"]; ?></td>
            <td><?php echo $row["achternaam"]; ?></td>
            <td><?php echo $row["plaats"]; ?></td>
            <td><?php echo $row["straat"]; ?></td>
            <td><?php echo $row["huisnummer"]; ?></td>
            <td><?php echo $row["email"]; ?></td>
            <td><?php echo $row["telefoonnummer"]; ?></td>
            <td><?php echo $row["prijshuur"]; ?></td>
            <td><?php echo $row["vierkantemeter"]; ?></td>
            <td><?php echo $row["datum"]; ?></td>
            <td><?php echo $row["samenvatting"]; ?></td>
            <td><?php echo $row["link"]; ?></td>
            <td><?php echo "<a href='huisslecht.php?data={$house_id}'><img height='20px' src='images/prullenbak.png'></a>" ; ?></td>
            <td><?php echo "<a href='huisgoed.php?data={$house_id}'><img height='20px' src='images/goed.png'></a>" ; ?></td>
        </tr> </tbody>
        <?php
    }
    ?>
</table>