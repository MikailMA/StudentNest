<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>StudentNest - Verhuur</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.2/examples/checkout/">

    

    

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
      }

      .b-example-divider {
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

      .container2{
        
        width: 920px;
	left: 50%;
	margin-left:-460px;
	position:relative;
	margin-top: 20px;
  font-size: 105%;
      }
    </style>
<?php 
include 'header.php';
?>
    
    <!-- Custom styles for this template -->
    <link href="form-validation.css" rel="stylesheet">
  </head>
  <body class="bg-light">

  <div class="bg-light">
    <div class="container2 pt-4 pb-4 text-dark">
  <h2 class="text-center">Plaats een Kamer voor Verhuur</h2>
<p>Welkom bij ons platform voor studentenhuisvesting! Als verhuurder kun je hier eenvoudig een kamer aanbieden aan studenten die op zoek zijn naar een geschikte plek om te wonen. Door je kamer op onze website te plaatsen, help je studenten bij het vinden van betaalbare en comfortabele huisvesting, terwijl je zelf de kans krijgt om huurders te selecteren die bij je woning passen.</p>
<p>Waarom zou je je kamer hier aanbieden?</p>
<ul>
  <li><strong>Bereik een breed publiek:</strong> Ons platform wordt bezocht door studenten van verschillende onderwijsinstellingen, zowel nationaal als internationaal.</li>
  <li><strong>Verhoog de zichtbaarheid:</strong> Jouw kameraanbieding wordt prominent weergegeven, waardoor het voor potentiële huurders gemakkelijk is om jouw aanbod te vinden.</li>
  <li><strong>Persoonlijke controle:</strong> Je behoudt volledige controle over wie je kamer huurt. Je kunt potentiële huurders screenen en selecteren op basis van je eigen criteria.</li>
</ul>
<p>Om te beginnen met het plaatsen van je kamer, vul eenvoudig het formulier hieronder in met alle relevante details over de kamer, zoals locatie, huurprijs, beschikbaarheid en eventuele speciale voorzieningen. Zorg ervoor dat je alle benodigde informatie verstrekt, zodat potentiële huurders een duidelijk beeld krijgen van wat je te bieden hebt.</p>
<p>Bedankt voor het gebruik van ons platform om studenten te helpen bij het vinden van een geschikte plek om te wonen. Jouw bijdrage is waardevol en maakt het leven van studenten gemakkelijker!</p>
    </div>
    </div>


    
<div class="container">
  <main>
    <div class="py-5 text-center">
      <h2>Verhuur formulier</h2>
      <p class="lead">Geef je woning of kamer een nieuw leven door de toekomst erin te vestigen.<br>Er zijn momenteel bijna 5000 studenten opzoek naar uw woning!</p>
    </div>

    <div class="row g-5">
      <div class="col-md-5 col-lg-4 order-md-last">
        <h4 class="d-flex justify-content-between align-items-center mb-3">
          <span class="text">Verhuur kosten</span>
        </h4>
        <ul class="list-group mb-3">
          <li class="list-group-item d-flex justify-content-between lh-sm">
            <div>
              <h6 class="my-0">Service kosten</h6>
              <small class="text-muted">Kosten om verhuur formulier te versturen</small>
            </div>
            <span class="text-muted">&euro;20</span>
          </li>
        
        </ul>

      </div>
      <div class="col-md-7 col-lg-8">
        <h4 class="mb-3">Verhuurder formulier</h4>

        <!-- FORMULIER -->
        <form class="needs-validation" method="post" action="huistoevoegen.php" enctype="multipart/form-data">
          <div class="row g-3">
          <div class="col-sm-6">
    <label for="firstName" class="form-label">Voornaam</label>
    <input type="text" class="form-control" name="voornaam" id="firstName" placeholder="Voornaam" pattern="[A-Za-z]+" required />
    <div class="invalid-feedback">
        Voer alleen letters in als voornaam.
    </div>
</div>

            <div class="col-sm-6">
              <label for="lastName" class="form-label">Achternaam</label>
              <input type="text" class="form-control" name="achternaam" id="lastName" placeholder="Achternaam" value="" pattern="[A-Za-z]+" required>
              <div class="invalid-feedback">
              Voer alleen letters in als voornaam.
              </div>
            </div>

            <div class="col-12">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" placeholder="john@doe.com" required>
              <div class="invalid-feedback">
                Please enter a valid email address for shipping updates.
              </div>
            </div>

            <div class="col-12">
    <label for="telefoon" class="form-label">Telefoon</label>
    <input type="tel" class="form-control" id="telefoon" name="telefoonnummer" placeholder="0612345678" pattern="[0-9]{10}" required>
</div>

            <div class="col-12">
              <label for="address" class="form-label">Verhuurprijs </label>
              <input type="number" class="form-control" id="address" name="verhuurprijs" placeholder="Prijs per maand in euro..." required>
              <div class="invalid-feedback">
                Prijs per maand in euro...
              </div>
            </div>

            <div class="col-12">
              <label for="address" class="form-label">Vierkante meters</label>
              <input type="number" name="vierkantemeters" class="form-control" placeholder="Grootte van de woning in vierkante meters..." required>
              <div class="invalid-feedback">
                Grootte van de woning in vierkante meters.
              </div>
            </div>


            <div class="col-md-5">
              <label for="plaats" class="form-label">Plaats</label>
              <select class="form-select" placeholder="Amsterdam" name="plaats" id="plaats" required>
                <option value="Amsterdam">Amsterdam</option>
                <option value="Utrecht">Utrecht</option>
                <option value="Delft">Delft</option>
                <option value="Rotterdam">Rotterdam</option>
                <option value="Denhaag">Denhaag</option>
              </select>
              <div class="invalid-feedback">
                Please select a valid country.
              </div>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Straat</label>
              <input type="text" class="form-control" name="straat" placeholder="straat..." pattern="[A-Za-z]+" required>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Huisnummer</label>
              <input type="number" class="form-control" name="huisnummer" placeholder="huisnummer..." required>
            </div>

            <div class="col-12">
              <label for="address2" class="form-label">Omschrijving</label>
              <input maxlength="130" type="text" class="form-control" name="omschrijving" placeholder="omschrijving..." required>
            </div>

            <!-- FOTO UPLOADEN BENEDEN -->

            <div class="col-12">
              <label for="address2" class="form-label">FOTO</label>
              <input type="file" name="file" required>
            </div>

        <!-- EINDE FOTO GEDEELTE -->


          <hr class="my-4">

          <div class="form-check">
            <input type="checkbox" class="form-check-input" name="servicevoorwaarden" required>
            <label class="form-check-label" for="Servicevoorwaarden">Ik ga akkoord met de servicevoorwaarden.</label>
          </div>


      

          <input class="w-100 btn btn-dark btn-lg" type="submit" name="submit"></input>
        </form>
      </div>
    </div>
  </main>

</div>


    <script src="assets/dist/js/bootstrap.bundle.min.js"></script>

      <script src="form-validation.js"></script>
  </body>
</html>
