<?php 

if(isset($_POST['sorteer']) && isset($_POST['zoekwoord'])) { 
  $zoekwoord = $_POST['zoekwoord'];
  $sort = $_POST['sorteer'];

  $sql = "SELECT * FROM goodhous WHERE plaats LIKE '%$zoekwoord%' or straat LIKE '%$zoekwoord%' ORDER BY $sort";


} elseif (isset($_POST['zoekwoord'])) {
  $zoekwoord = $_POST['zoekwoord'];
  $sql = "SELECT * FROM goodhous WHERE plaats LIKE '%$zoekwoord%' or straat LIKE '%$zoekwoord%'";

} elseif (isset($_POST['sorteer'])){
  $sort = $_POST['sorteer'];
  $sql = "SELECT * FROM goodhous ORDER BY $sort";
} else {
  $sql = "SELECT * FROM goodhous";
}




?>