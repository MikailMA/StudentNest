<!DOCTYPE html>
<html>
<head>
    <title>Registratie</title>
    </head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentNest - Signup</title>
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
       
        .form-signin {
  max-width: 330px;
  padding: 9rem 0 0 0 ;
}

.form-signin .form-floating:focus-within {
  z-index: 2;
}

.form-signin input[type="email"] {
  margin-bottom: -1px;
  border-bottom-right-radius: 0;
  border-bottom-left-radius: 0;
}

.form-signin input[type="password"] {
  margin-bottom: 10px;
  border-top-left-radius: 0;
  border-top-right-radius: 0;
}

body{
    background-repeat: repeat !important;
}
    </style>
<?php include 'header.php'; ?>


<!--  -->


<main class="form-signin w-100 m-auto">
  <form method="post" action="registratie.php">
    <h1 class="h3 mb-3 fw-normal">Regristreer uw account</h1>

    <div class="form-floating">
      <input type="text" class="form-control" name="gebruikersnaam" pattern="[a-z0-9]+"  placeholder="gebruikersnaam" required>
      <label for="floatingInput" class="text-dark">Gebruikersnaam</label>
    </div>
    <div class="form-floating">
      <input type="password" class="form-control" name="wachtwoord" placeholder="wachtwoord" pattern="[a-z0-9]+" required>
      <label for="floatingPassword" class="text-dark">Wachtwoord</label>
      <p class="text-white">Geen hoofdletters en speciale tekens</p>
    </div>

    <input class="btn btn-dark w-100 py-2" type="submit" name="registreer" value="Registreer"></input>
  </form>
</main>
<style>
	footer {
    margin-top: 20px;
    position: fixed;
    bottom: 0;
    background-color: white;
    height: 100px;
    width: 100%;
    color: black;
    font-size: 18px; 
    display: flex;
    justify-content: center;
    align-items: center;
}
 
</style>
 
<footer>
<div>
StudentNest - Vind jouw studentenwoning!
</div>
</footer>

</body>
</html>
