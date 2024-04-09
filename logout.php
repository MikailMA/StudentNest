<?php
session_start();

// Verwijder de gebruikersnaam uit de sessie om uit te loggen
unset($_SESSION['gebruikersnaam']);

// Redirect naar de inlogpagina of een andere gewenste pagina na uitloggen
header('Location: index.php');
exit;
?>