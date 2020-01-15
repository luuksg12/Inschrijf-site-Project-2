<?php
include_once "connect.php";
session_start();
/*vibe check*/
if (!isset($_SESSION['loggedin'])) {
    header('Location: index.php');
    exit();
}
/*hier haal ik de waardes uit de database terwijl ik gebruik maak van de $_SESSION id zodat ik de juiste waardes voor het juiste account krijg*/
$stmt = $connection->prepare('SELECT password, email FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Profiel-administratie</title>
    <link rel="stylesheet" type="text/css" href="beheer.css">
</head>
<body class="loggedin">
<nav class="navtop">
    <div>
        <h1>account beheer</h1>
    </div>
</nav>
<div class="content">
    <h2>Profile Page</h2>
    <div>
        <p>Uw accountgegevens staan beneden:</p>
        <table id = "accountgegevens">
            <tr>
                <td>Gebruikersnaam:</td>
                <td><?=$_SESSION['name']?></td>
            </tr>
            <tr>
                <td>Email:</td>
                <td><?=$email?></td>
            </tr>
        </table>
        <a href="logout.php"><i></i>Logout</a>
    </div>
    <h1>Profiel aanpassen</h1>
    <p>Er is één administratie account</p>
    <div>
        <form action="changeprofile.php">
            <table>
                <tr>
                    <td><label>gebruikersnaam:</label></td>
                    <td><input type = "text" name = 'username' value="<?=$_SESSION['name']?>"></td>
                </tr><tr>
                    <td><label>oud wachtwoord:</label></td>
                    <td><input type = "password" name = 'old_password'></td>
                </tr><tr>
                    <td><label><b>nieuw</b> wachtwoord:</label></td>
                    <td><input type = "password" name = 'password1'></td>
                </tr><tr>
                    <td><label>herhaal <b>nieuw</b> wachtwoord:</label></td>
                    <td><input type = "password" name = 'password2'></td>
                </tr><tr>
                    <td><label>e-mail:</label></td>
                    <td><input type = "text" name = 'email' value="<?=$email?>"></td>
                </tr>
                <tr>
                    <td><input type = "submit" name = "submit" value = "aanpassen"></td>
                </tr>
            </table>
        </form>
    </div>
</div>
</body>
</html>


