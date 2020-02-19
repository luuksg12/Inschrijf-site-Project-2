<!DOCTYPE html>
<html>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
    </style>
<link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Wortelkracht - inschrijven</title>

<header id = "title">
	<h1 >W o r t e l K r a c h t</h1>
</header>

<nav id = "menu">
    <table id = "tableR">
        <tr>
            <td class = "td"><a class = "knop1" href="https://www.studiohertz.nl/"><p>HOME</p></a></td>
            <td class = "td"><a class = "knop1" href="https://www.studiohertz.nl/gallery"><p>KLANKTHERAPIE</p></a></td>
            <td class = "td"><a class = "knop1" href="https://www.studiohertz.nl/about"><p>OVER MIJ</p></a></td>
            <td class = "td"><a class = "knop1" href="https://www.studiohertz.nl/agenda"><p>AGENDA</p></a></td>
            <td class = "td"><a class = "knop1" href="https://www.studiohertz.nl/contact"><p>OVER MIJ</p></a></td>
            <td class = "td"><a class = "knop1" href="http://localhost/inschrijven/"><p>INSCHRIJVEN</p></a></td>
        </tr>
    </table>
            <div id = secondairy>
            <a class = "knop2" href="https://www.studiohertz.nl/"><p>HOME</p></a>
            <a class = "knop2" href="https://www.studiohertz.nl/gallery"><p>KLANKTHERAPIE</p>
            <a class = "knop2" href="https://www.studiohertz.nl/about"><p>OVER MIJ</p>
            <a class = "knop2" href="https://www.studiohertz.nl/agenda"><p>AGENDA</p>
            <a class = "knop2" href="https://www.studiohertz.nl/contact"><p>OVER MIJ</p></a>
            <a class = "knop2" href="http://localhost/inschrijven/"><p>INSCHRIJVEN</p></a>
            </div>
</nav>

<body>

    <div id = "mainpage">
        <table class = "Colpadding" id = "tableHolder">
            <form class = "infobox" method = 'post' action="add.php">
                <tr><td><label class = "label" >Voornaam:</label></td>
                    <td rowspan="7">
                        <div class = "infobox" id = "box-2">
                            <label class = "label1">Selecteer uw datum:</label>
                            <br>
                            <select class = "label1" name = 'date'>
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
                            <label class = "label1">Selecteer uw plaats: (zie onderstaande afbeelding)</label>
                            <br>
                            <select class = "label1" name = 'place'>
                            <?php
                                for ($i = 1; $i < 11; $i++){
                                    echo "<option value = \"".$i."\">Plaats ".$i."</option>";
                                }
                            ?>
                            </select>
                        </div>
                    </td></tr>

                <tr><td>   <input class = "info" type = "text" name = 'voornaam' required maxlength = "40"></td></tr>
                <tr><td><label class = "label">Achternaam:</label></td></tr>
                <tr><td>   <input class = "info" type = "text" name = 'achternaam' required maxlength = "40"></td></tr>
                <tr><td><label class = "label">Adres:</label></td></tr>
                <tr><td>   <input class = "info" type = "text" name = 'adres' required maxlength = "40"></td></tr>
                <tr><td><label class = "label">Woonplaats:</label></td></tr>
                <tr><td>   <input class = "info" type = "text" name = 'woonplaats' required maxlength = "40"></td>
                    <td rowspan="7">

                        <div class = "infobox" id = "box-3">
                            <label class = label1>algmemene voorwaarden:</label>
                            <input type = "checkbox" required>
                            <br>
                            <input id = "submit" type = "submit" name = "submit" value = "Inschrijven">

                        </div>


                    </td>
                </tr>
                <tr><td><label class = "label">Telefoonnummer:</label></td></tr>
                <tr><td>   <input class = "info" type = "text" name = 'telefoonnummer' required maxlength = "20"></td></tr>
                <tr><td><label class = "label">E-mailadres:</label></td></tr>
                <tr><td>  <input class = "info" type = "text" name = 'email' required maxlength = "40"></td></tr>
                <tr><td><label class = "label">Bericht:</label></td></tr>
                <tr><td>   <textarea class = "info" id = "bericht" name = 'bericht' maxlength = "125" type = "text" placeholder="Eventuele opmerkingen..."></textarea></td></tr>



        </table>
        <p id ="testid"></p>
        </div>
        </form>

<div>
    <a href = "./plaatsen.php"><p align = "center">plaatsen</p></a>
    <a href = "./algemenevoorwaarden.php"><p align = "center">algemene voorwaarden</p></a>
    <a href = "./inlog.php"><p align = "center">administatie</p></a>
</div>
</body>

<script src="functions.js"></script>
</html>