<?php
/*Wij checken of de state van het persoon in ingelogt*/
session_start();
if (!isset($_SESSION['loggedin'])) {
    header('Location: inlog.php');
    exit();
}?>
<!DOCTYPE html>
<html>
<meta charset="utf-8">
<title>Login</title>
<link rel="stylesheet" type="text/css" href="beheer.css">
<header id = header>
    <h1>Administratie</h1>
    <p>Hier kan je data toevoegen aan de lijst. Voor bezoekers worden alleen data uit de toekomst geladen.</p>
</header>
<body>
<div class="login">

    <h3>Datum toevoegen</h3>
    <form action="DataAanpassen.php" method="post">
        <input type = "date" name = 'datum1'>
        <br>
        <input id = "add" type = "submit" name = "submit" value="Datum toevoegen">
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
        <input type = "submit" id = "remove" name = "submit" value="Datum verwijderen">
    </form>
    <br>
    </div>
    <h3>Inschrijvingen</h3>
    <nav>
        <a href = "./profile.php"><p align = "center">profielgegevens bekijken/aanpassen</p></a>

        <a href = "./logout.php"><p align = "center">annuleren</p></a>
    </nav>
    <?php
    require "connect.php";
    $query = "SELECT voornaam, achternaam, adres, woonplaats, telefoonnummer, email, bericht, datum, plaats FROM `inschrijvingen`";
    $fetchproduct1=mysqli_query($connection,$query);
    $d= strtotime("today");
    while($product1 = mysqli_fetch_row($fetchproduct1)){
        if($product1[7] > date("Y-m-d","$d")) {
            echo "<table id='inschrijvingen_table'>";
            echo "<tr class='table_row_inschrijf'><td>Voornaam:</td><td class='table_data_inschrijf'>" . $product1[0] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>Achternaam:</td><td class='table_data_inschrijf'>" . $product1[1] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>Adres:</td><td class='table_data_inschrijf'>" . $product1[2] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>Woonplaats:</td><td class='table_data_inschrijf'>" . $product1[3] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>Telefoonnummer:</td><td class='table_data_inschrijf'>" . $product1[4] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>E-mail:</td><td class='table_data_inschrijf'>" . $product1[5] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>Bericht:</td><td class='table_data_inschrijf'>" . $product1[6] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>Datum:</td><td class='table_data_inschrijf'>" . $product1[7] . "</td></tr>";
            echo "<tr class='table_row_inschrijf'><td>Plaats:</td><td class='table_data_inschrijf'>" . $product1[8] . "</td></tr>";
            echo "</table>";
        }

    }
    mysqli_close($connection);

    ?>

</body>
<script src="administratie.js"></script>
</html>
