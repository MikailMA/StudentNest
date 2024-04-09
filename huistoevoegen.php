<?php
 
 
$host = "localhost";
$user = "root";
$pass = "usbw";
$db = "housing";
$connection = mysqli_connect($host, $user, $pass, $db);

// IMAGE SYSTEM BENEDEN

if(isset($_POST["submit"])){
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $naamStraatLaag = strtolower($_POST["straat"]);
    $naamHuisnummerLaag = strtolower($_POST["huisnummer"]);
    $allowed = array('jpg', 'jpeg', 'png');

    if(in_array($fileActualExt, $allowed)) {
        if($fileError === 0){
            if($fileSize < 7000000){
                $fileNameNew = $naamStraatLaag.$naamHuisnummerLaag.".".$fileActualExt;
                $fileDestination = 'uploads/'.$fileNameNew;
                move_uploaded_file($fileTmpName, $fileDestination);

            } else {
                echo "Er is iets fout gegaan bij het verzenden van je foto! Te groot";
            }
        } else {
            echo "Er is iets fout gegaan bij het verzenden van je foto!";
        }
    } else {
        echo "Dit type bestand is niet toegestaan!";
    }

}


// IMAGE SYSTEM KLAAR 
 
$voornaam = $_POST["voornaam"];
$achternaam = $_POST["achternaam"];
$email = $_POST["email"];
$telefoonnummer = $_POST["telefoonnummer"];
$verhuurprijs = $_POST["verhuurprijs"];
$vierkantemeters = $_POST["vierkantemeters"];
$plaats = $_POST["plaats"];
$straat = $_POST["straat"];
$huisnummer = $_POST["huisnummer"];
$omschrijving = $_POST["omschrijving"];
$file = $fileNameNew;

$date = date("Y-m-d");
// DATUM FIXEN
 
$sql = "INSERT INTO houses(voornaam, achternaam, plaats, straat, huisnummer, email, telefoonnummer, prijshuur, vierkantemeter, samenvatting, datum, link) VALUES ('$voornaam', '$achternaam', '$plaats', '$straat', '$huisnummer', '$email', '$telefoonnummer', '$verhuurprijs', '$vierkantemeters', '$omschrijving', '$date', '$file')";
 
$resultaat = mysqli_query($connection, $sql);
 
 
$verbreken = mysqli_close($connection);
 
 
echo "<script>
alert('$straat $huisnummer is toegevoegd!');
window.location.href='index.php';
</script>";
 
?>