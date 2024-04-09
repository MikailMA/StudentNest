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

if (isset($_POST['registreer'])) {
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];

    // Controleren of de gebruikersnaam al in gebruik is
    $check_sql = "SELECT * FROM gebruikers WHERE gebruikersnaam=?";
    $stmt = $conn->prepare($check_sql);
    $stmt->bind_param("s", $gebruikersnaam);
    $stmt->execute();
    $stmt->store_result();

    if ($stmt->num_rows > 0) {
        echo "<script>
        alert('$gebruikersnaam is al in gebruik!');
        window.location.href='signup.php';
        </script>";
    } else {
        // Wachtwoord hashen voordat het wordt opgeslagen (gebruik MD5)
        $gehasht_wachtwoord = md5($wachtwoord);

        // Gebruikersgegevens invoegen in de database
        $insert_sql = "INSERT INTO gebruikers (gebruikersnaam, wachtwoord) VALUES (?, ?)";
        $stmt = $conn->prepare($insert_sql);
        $stmt->bind_param("ss", $gebruikersnaam, $gehasht_wachtwoord);

        if ($stmt->execute()) {
            echo "<script>
alert('$gebruikersnaam is aangemaakt! U kunt nu inloggen.');
window.location.href='index.php';
</script>";
        } else {
            header('Location: index.php');
        }
    }

    // Verbinding sluiten
    $stmt->close();
    $conn->close();
}
?>