<!DOCTYPE HTML>
<html>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="inlog.css">
<header id = "title">
    <h1>W o r t e l K r a c h t</h1>
</header>
    <body>
        <nav>
            <table id = "tableR">
                <tr>
                    <td class = "tdknop"><a class = "knop1" href="https://www.studiohertz.nl/"><p>HOME</p></a></td>
                    <td class = "tdknop"><a class = "knop1" href="https://www.studiohertz.nl/gallery"><p>KLANKTHERAPIE</p></a></td>
                    <td class = "tdknop"><a class = "knop1" href="https://www.studiohertz.nl/about"><p>OVER MIJ</p></a></td>
                    <td class = "tdknop"><a class = "knop1" href="https://www.studiohertz.nl/agenda"><p>AGENDA</p></a></td>
                    <td class = "tdknop"><a class = "knop1" href="https://www.studiohertz.nl/contact"><p>OVER MIJ</p></a></td>
                    <td class = "tdknop"><a class = "knop1" href="http://localhost/inschrijven/"><p>INSCHRIJVEN</p></a></td>
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
    <div id="login">
        <h1 id = "logintitle">Login</h1>
        <form action="authenticate.php" method="post">
            <label for="username">
            </label>
            <input type="text" name="username" placeholder="Username" id="username" required>
            <label for="password">
            </label>
            <input type="password" name="password" placeholder="Password" id="password" required>
            <!--call de functies op een hover en geef het element waar je op staat mee.-->
            <input id = "knopje" type="submit" value="Login">
        </form>
        <p id = "error"></p>
        <a href = "./index.php"><p>annuleren</p></a>
    </div>
    <script src = "inlogscript.js"></script>
</body>
</html>