<?php
include_once 'connect.php';
    $voornaam = $_POST['voornaam'];
    $achternaam = $_POST['achternaam'];
    $adres = $_POST['adres'];
    $woonplaats = $_POST['woonplaats'];
    $telefoonnummer = $_POST['telefoonnummer'];
    $email = $_POST['email'];
    $bericht = $_POST['bericht'];
    $date = $_POST['date'];
    $place = $_POST['place'];

    $query = 'INSERT INTO `inschrijvingen`(`voornaam`, `achternaam`, `adres`, `woonplaats`, `telefoonnummer`, `email`, `bericht`, `datum`, `plaats`) VALUES ("'.$voornaam.'","'.$achternaam.'","'.$adres.'","'.$woonplaats.'","'.$telefoonnummer.'","'.$email.'","'.$bericht.'","'.$date.'","'.$place.'")';

mysqli_query($connection,$query);
mysqli_close($connection);
header("location: index.php");