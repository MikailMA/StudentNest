<!doctype html>
<html lang="nl" data-bs-theme="auto">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentNest - Home</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbars/">
    <link href="assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
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

        .container {
            font-family: "Poppins", sans-serif;
            font-weight: 300;
        }

        .height {
            height: 30vh;
        }

        .search {
            position: relative;
            box-shadow: 0 0 40px rgba(51, 51, 51, .1);
        }

        .search input {
            height: 50px;
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
            color: white; 
            border: none; 
            border-radius: 5px; 
            cursor: pointer; 
        }

        .search button:hover {
            background: #1B1A1A; 
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
       
    </style>
</head>
<?php include 'header.php'; ?>


<div class="containerWelcome">
    <div class="welcomeTextAll">
      <h1 class="welcomeText display-1">Student?</h1>
      <h2 class="welcomeTextSmall display-5">Vind hier jouw droom studentenwoning!</h2>
    </div>

    <div class="container">
      <div class="row ">
          <div class=" height col-md-4  mt-5">
              <form action="aanbod.php" method="POST">
                  <div class="search">
                      <i class="fa fa-search"></i>
                      <input type="text" class="form-control" name="zoekwoord" placeholder="Zoek op plaats of straat... ">
                     <button type="submit" class="btn text-white">Zoek</button>
                 </div>

              </form>
          </div>
      </div>
 </div>

      </div>




<script src="assets/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>