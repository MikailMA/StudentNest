<?php
session_start();

// Databaseverbinding instellen (vervang met jouw eigen databasegegevens)
$dbhost = "localhost";
$dbuser = "root";
$dbpass = "usbw";
$dbname = "housing";

$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Controleren op fouten bij de databaseverbinding
if ($conn->connect_error) {
    die("Databaseverbinding mislukt: " . $conn->connect_error);
}

if (isset($_POST['login'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    // Voorkom SQL-injectie door invoergegevens te ontsnappen
    $gebruikersnaam = $conn->real_escape_string($gebruikersnaam);

    // Query om gebruiker op te halen
    $query = "SELECT gebruikersnaam, wachtwoord FROM gebruikers WHERE gebruikersnaam=?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $gebruikersnaam);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows == 1) {
        $stmt->bind_result($gebruikersnaam_db, $wachtwoord_db);
        $stmt->fetch();

        // Controleren of het ingevoerde wachtwoord overeenkomt met de gehashte waarde
        if (md5($wachtwoord) === $wachtwoord_db) { // Hier gebruiken we MD5 voor wachtwoordvergelijking
            // Inloggen geslaagd
            $_SESSION['gebruikersnaam'] = $gebruikersnaam;
            header('Location: index.php'); // Vervang dit door de welkomstpagina
        } else {
            // Onjuist wachtwoord
            echo "<script>
alert('Onjuist wachtwoord!');
window.location.href='login.php';
</script>";
        }
    } else {
        echo "<script>
alert('Gebruiker is niet gevonden!');
window.location.href='login.php';
</script>";
    }
}

// Verbinding sluiten
$conn->close();
?>
