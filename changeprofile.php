<?php
include_once "connect.php";
session_start();
/*
$stmt = $connection->prepare('SELECT password, email FROM accounts WHERE id = ?');
$stmt->bind_param('i', $_SESSION['id']);
$stmt->execute();
$stmt->bind_result($password, $email);
$stmt->fetch();
$stmt->close();
 */
if($_GET['password1']== $_GET['password2']) {

    echo $_GET['old_password'];
    echo "<br>";
    echo $_GET['password1'];
    echo "<br>";


    /*ik encrypt het wachtwoord hier, zodat ik het kan vergelijken met de database*/
    $old_password = password_hash($_GET['old_password'], PASSWORD_DEFAULT);
    $password1 = password_hash($_GET['password1'], PASSWORD_DEFAULT);

    echo $old_password;
    echo "<br>";
    echo $password1;

    /* check of de wachtwoorden zijn ingevult*/
   if(isset($_GET['old_password']) && isset($_GET['password1']) && isset($_GET['password2']) ) {
       if(password_verify($_GET['old_password'], $_GET['old_password'])) {
           $stmt = $connection->prepare('UPDATE `accounts` SET `username`= ?,`password`= ?,`email`= ? WHERE `id` = ?');
           $stmt->bind_param('sssi', $_POST['username'], $password1, $_POST['email'], $_SESSION['id']);
           echo "hi";
       }
   }else{
       $stmt = $connection->prepare('UPDATE `accounts` SET `username`= ?,`email`= ? WHERE `id` = ?');
       $stmt->bind_param('ssi', $_POST['username'],  $_POST['email'], $_SESSION['id']);
       echo "penisman";
   }
       /*de old password staat gehashed die moet je unhashen*/
       $stmt->execute();
       $stmt->close();
}
