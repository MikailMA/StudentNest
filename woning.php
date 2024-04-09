<!doctype html>
<html lang="en" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentNest - Woning</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Body and Navbar Styles */
        .navbar {
            height: 4.5rem;
            padding-left: 20px;
            color: white !important;
        }

        .navbar ul {
            padding-left: 20px;
        }

        .navbar-brand {
            font-size: 140%;
        }

        /* Container Styles */
        .container {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }

        /* Search Form Styles */
        .height {
            height: 30vh;
        }

        .search {
            position: relative;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1);
        }

        .search input {
            height: 50px;
            /* text-indent: 25px; */
            border: 2px solid #d6d4d4;
        }

        .search input:focus {
            box-shadow: none;
            border: 2px solid darkgray;
        }

        .search .fa-search {
            position: absolute;
            top: 20px;
            left: 16px;
        }

        .search button {
            position: absolute;
            top: 0px;
            right: 0px;
            height: 50px;
            width: 70px;
            background: black;
            color: white; /* Text color for the button */
            border: none; /* Remove button border */
            border-radius: 5px; /* Add some border-radius for a nicer look */
            cursor: pointer; /* Change cursor to pointer on hover */
        }

        /* Button Hover Effect */
        .search button:hover {
            background: #1B1A1A; /* Change background color on hover */
        }

        .welcomeTextAll{
          padding: 12% 0 0 11%;
          size: 200%;
        }

        .welcomeTextSmall{
          
        }

        .navbar-light{
          color: white !important;
        }

        .navbar{
          color: black !important;
        }

        hr { background-color: black; height: 2px; border: 0; }

       
    </style>
</head>
<?php include 'header.php'; ?>
<?php 
require_once 'connection.php';

if (isset($_GET['id'])) {
    $woningId = $_GET['id'];
    $sql = "SELECT * FROM goodhous WHERE house_id=$woningId";

    $all_houses = $conn->query($sql);
    $row = mysqli_fetch_assoc($all_houses);
  } else {
    echo "<script>
    window.location.href='index.php?error=woning-niet-gevonden';
    </script>";
  }

?>

<section style="background-color: ggg;">
  <div class="container ">
    <div class="row justify-content-center">
      <div class="col-md-8 col-lg-6 col-xl-8">
        <div class="card" style="border-radius: 10px;">
          <div class="bg-image hover-overlay ripple ripple-surface ripple-surface-light"
            data-mdb-ripple-color="light">
            
            <img  src='uploads/<?php echo $row["link"] ?>'
              style="border-top-left-radius: 15px; border-top-right-radius: 15px;" class="img-fluid"
              alt="foto" />
            
          </div>

          <div>
                <p class="text-dark fw-bold">  <?php echo $row["straat"]. " ". $row["huisnummer"]?></p>
                <p class="small text-muted"><?php echo $row["voornaam"]. " ". $row["achternaam"]?></p>
              </div>

          <hr class="my-0" />
          <div class="card-body pb-0"><div class="d-flex justify-content-between">
              <p class="text-dark"><img src="images/location.png" height="17px"> Locatie</p>
              <p class="small text-dark"><?php echo $row["plaats"]?></p>
            </div></div>
          <hr class="my-0" />

          <div class="card-body pb-0"><div class="d-flex justify-content-between">
              <p class="text-dark"><img src="images/euro.png" height="17px"> Huur</p>
              <p class="small text-dark"><?php echo $row["prijshuur"]?>,- euro</p>
            </div></div>
          <hr class="my-0" />

          <div class="card-body pb-0"><div class="d-flex justify-content-between">
              <p class="text-dark"><img src="images/vierkantemeter.png" height="17px"> Grootte</p>
              <p class="small text-dark"><?php echo $row["vierkantemeter"]?>m2</p>
            </div></div>
          <hr class="my-0" />

          <div class="card-body pb-0"><div class="d-flex justify-content-between">
              <p class="text-dark"><img src="images/mail.png" height="17px"> Telefoonnummer</p>
              <p class="small text-dark"><?php echo $row["telefoonnummer"]?></p>
            </div></div>
          <hr class="my-0" />

          <div class="card-body"><div class="d-flex justify-content-between">
              <p class="small text-dark"><?php echo $row["samenvatting"]?></p>
            </div></div>
          <hr class="my-0" />




          <hr class="my-0" />
          <div class="card-body">
            <div class="d-flex justify-content-between align-items-center pb-2 mb-1">
              <a href="aanbod.php" class="text-dark fw-bold">Terug</a>
              <a href="mailto:<?php echo $row["email"]?>"><button type="button" class="btn-dark btn">Mail</button></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>




























</main>
<script src="assets/dist/js/bootstrap.bundle.min.js"></script>

    </body>
</html>
