<?php
session_start();

// Controleren of de gebruiker is ingelogd
if (!isset($_SESSION['gebruikersnaam'])) {
    header('Location: login.php'); // Redirect naar de inlogpagina als niet ingelogd
    exit;
}

// Controleren of de gebruikersnaam overeenkomt met "Kees2" of "Mikail"
$toegestane_gebruikers = array("julius", "mikail");
if (!in_array($_SESSION['gebruikersnaam'], $toegestane_gebruikers)) {
    echo "<script>
alert('Jij hebt geen toegang tot deze pagina!');
window.location.href='index.php';
</script>";
    exit;
}
?>

<?php
 
// verbindingsgegevens database
 
$host = "localhost";
$user = "root";
$pass = "usbw";
$db = "housing";
$connection = mysqli_connect($host, $user, $pass, $db);
 
// Ophalen van gegevens uit het formulier

    $data = $_GET['data'];


 
// Invoegen van de gegevens in de tabel boeken
$sql = "INSERT INTO goodhous (house_id, voornaam, achternaam, plaats, straat, huisnummer, email, telefoonnummer, prijshuur, vierkantemeter, datum, samenvatting, link)
SELECT house_id, voornaam, achternaam, plaats, straat, huisnummer, email, telefoonnummer, prijshuur, vierkantemeter, datum, samenvatting, link
FROM houses
WHERE house_id=$data";

// SQL-query om gegevens uit "houses" te verwijderen
$sql_delete = "DELETE FROM houses WHERE house_id=$data";
 
$resultaat = mysqli_query($connection, $sql);

// Voer de verwijderingsquery uit
$resultaat_delete = mysqli_query($connection, $sql_delete);
 

 
// Verbreken van de verbinding met de database
 
$verbreken = mysqli_close($connection);
 
// Bevestigen dat de gegevens zijn opgeslagen 
 
echo "<script>
alert('Het huis is toegevoegd');
window.location.href='huizencheck.php';
</script>";
 

?>