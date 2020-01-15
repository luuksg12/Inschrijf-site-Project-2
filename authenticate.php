<?php
include_once 'connect.php';
session_start();
    /*isset checked of alle waardes zijn ingevult.*/
if ( !isset($_POST['username'], $_POST['password']) ) {
    die ('Please fill both the username and password field!');
}
if ($stmt = $connection->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
    /* prepare een SQL query. bind_param zorgt voor een aanpasbare waarde in de SQL query. Zo kan je het in een loop gebruiken. Dit helpt ook tegen eventuele sql injecties*/
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();
    /*execute en store_result spreken voor zich.*/
}
    /* nu checken wij of het id en wachtwoord in de database staan. */
if ($stmt->num_rows > 0) {
    /*bind result zet resultaten vast aan de variables*/
    $stmt->bind_result($id, $password);
    $stmt->fetch();
    /*Het bestaat, maar is het ook correct. hier checken wij of deze waardes gelijk zijn*/
    if (password_verify($_POST['password'], $password)) {
        /*Het is gelijk, nu maken wij een state van ingelogged aan. Deze waarden kunnen wij gebruiken om rechten te geven*/
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
        $_SESSION['name'] = $_POST['username'];
        $_SESSION['id'] = $id;
        header('Location: administratie.php');
    } else {
        header("Location: inlog.php");
    }
} else {
    header("Location: inlog.php");
}
$stmt->close();
?>