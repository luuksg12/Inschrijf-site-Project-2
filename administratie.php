<?php
/*Wij checken of de state van het persoon in ingelogt*/
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: inlog.php');
    exit();
}?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="beheer.css">
</head>
<body>
<div class="login">
    <h1>Administratie</h1>
    <p>Hier kan je data toevoegen aan de lijst. Voor bezoekers worden alleen data uit de toekomst geladen.</p>
    <h3>Datum toevoegen</h3>
    <form action="DataAanpassen.php" method="post">
        <input type = "date" name = 'datum1'>
        <br>
        <input type = "submit" name = "submit" value="Datum toevoegen">
    </form>
    <h3>Data in lijst</h3>
    <form action="DataVerwijderen.php" method="post">
        <select name="datum1">
            <?php
            require "connect.php";
            $query = "SELECT * FROM `datumlijst` WHERE `datum1` > NOW()";
            $fetchproduct = mysqli_query($connection,$query);
            while($product = mysqli_fetch_row($fetchproduct)){
                echo "<option value='".$product[0]."'>".$product[0]."</option>";
            }
            ?>
        </select>
        <br>
        <input type = "submit" name = "submit" value="Datum verwijderen">
    </form>
    <br>
</div>
<nav>
    <a href = "./profile.php"><p align = "center">profielgegevens bekijken/aanpassen</p></a>

    <a href = "./logout.php"><p align = "center">annuleren</p></a>
</nav>
</body>
</html>
