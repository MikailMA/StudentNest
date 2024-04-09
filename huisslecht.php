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
$sql = "DELETE FROM houses WHERE house_id=$data;";


// Verwijderen van de foto
$foto = "SELECT link FROM houses where house_id=$data";
$fotoVerkrijgen = $connection->query($foto);

$resultaat = mysqli_query($connection, $sql);
$rij = mysqli_fetch_assoc($fotoVerkrijgen);
$file_pointer = $rij["link"];
unlink("uploads/$file_pointer");

// Verbreken van de verbinding met de database
 
$verbreken = mysqli_close($connection);
 
// Bevestigen dat de gegevens zijn opgeslagen 
 
echo "<script>
alert('Het boek is verwijderd!');
window.location.href='huizencheck.php';
</script>";
 
?>