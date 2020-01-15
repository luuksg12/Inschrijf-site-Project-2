<!DOCTYPE html>
<html>
<head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Source+Sans+Pro&display=swap');
    </style>
<link href="https://fonts.googleapis.com/css?family=Oxygen&display=swap" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="style.css">
<title>Wortelkracht - inschrijven</title>
</head>
<body>
<div id = "title">
	<h1>W o r t e l K r a c h t</h1>
</div>

    <div id = "menu">
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
    </div>

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

                <tr><td>   <input class = "info" type = "text" name = 'voornaam'></td></tr>
                <tr><td><label class = "label">Achternaam:</label></td></tr>
                <tr><td>   <input class = "info" type = "text" name = 'achternaam'></td></tr>
                <tr><td><label class = "label">Adres:</label></td></tr>
                <tr><td>   <input class = "info" type = "text" name = 'adres'></td></tr>
                <tr><td><label class = "label">Woonplaats:</label></td></tr>
                <tr><td>   <input class = "info" type = "text" name = 'woonplaats'></td>
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
                <tr><td>   <input class = "info" type = "text" name = 'telefoonnummer'></td></tr>
                <tr><td><label class = "label">E-mailadres:</label></td></tr>
                <tr><td>  <input class = "info" type = "text" name = 'email'></td></tr>
                <tr><td><label class = "label">Bericht:</label></td></tr>
                <tr><td>   <textarea class = "info" id = "bericht" name = 'bericht' type = "text" placeholder="Eventuele opmerkingen..."></textarea></td></tr>



        </table>
    </div>
<div>
    <a href = "./algemenevoorwaarden.php"><p align = "center">algemene voorwaarden</p></a>
    <a href = "./inlog.php"><p align = "center">administatie</p></a>
</div>
</form>
<div id = "footer">
	<h1>Footer placeholder</h1>
</div>
<img id= "layout" src="images/layout2.png">
</body>
</html>