<!doctype HTML>
<link rel="stylesheet" type="text/css" href="plaatsen.css">
<body>
<header>
<form>
    <p>selecteer plaats:</p>
    <select id = "selected">
        <?php
        for ($i = 1; $i < 11; $i++){
            echo "<option value = \"".$i."\">Plaats ".$i."</option>";
        }
        ?>
    </select>
</form>
</header>
<button id = "testid">plaatsen</button>
<table id="seats">
    <tr class ="seatRow"><td><img src="images/seat1.png"></td><td><img src="images/seat2.png"></td><td><img src="images/seat3.png"></td>
        <td><img src="images/seat4.png"></td><td><img src="images/seat5.png"></td></tr>

    <tr class ="seatRow"><td><img class="yes" src="images/yes.png"></td><td><img class="yes" src="images/yes.png"></td>
        <td><img class="yes" src="images/yes.png"></td><td><img class="yes" src="images/yes.png"></td><td><img class="yes" src="images/yes.png"></td></tr>

    <tr class ="seatRow"><td><img src="images/seat6.png"></td><td><img src="images/seat7.png"></td><td><img src="images/seat8.png"></td>
        <td><img src="images/seat9.png"></td><td><img src="images/seat10.png"></td></tr>

    <tr class ="seatRow"><td><img class="yes" src="images/yes.png"></td><td><img class="yes" src="images/yes.png"></td>
        <td><img class="yes" src="images/yes.png"></td><td><img class="yes" src="images/yes.png"></td><td><img class="yes" src="images/yes.png"></td></tr>
</table>
</body>
<script src="plaatsen.js"></script>
</HTML>
