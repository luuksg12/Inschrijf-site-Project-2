<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <!--include het javascript vanuit de functions.js -->
    <script src = "functions.js"></script>

</head>
<body>
<div id = "title">
    <h1>W o r t e l K r a c h t</h1>
</div>
<nav>
    <div>
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
</nav>
<div class="login">
    <h1>Login</h1>
    <form action="authenticate.php" method="post">
        <label for="username">
        </label>
        <input type="text" name="username" placeholder="Username" id="username" required>
        <label for="password">
        </label>
        <input type="password" name="password" placeholder="Password" id="password" required>
        <!--call de functies op een hover en geef het element waar je op staat mee.-->
        <input type="submit" onmouseover="hover(this)" onmouseout="dehover(this)" value="Login" id = "knopje">
    </form>
    <p id = "error"></p>
    <a href = "./index.php"><p align = "center">annuleren</p></a>
</div>
</body>
</html>