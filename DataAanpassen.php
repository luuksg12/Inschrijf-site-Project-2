<?php
include_once 'connect.php';
$datum1 = $_POST['datum1'];

$query = 'INSERT INTO `DatumLijst`(`datum1`) VALUES ("'.$datum1.'")';

mysqli_query($connection,$query);
mysqli_close($connection);
header("location: administratie.php");