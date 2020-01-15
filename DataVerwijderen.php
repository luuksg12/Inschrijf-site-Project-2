<?php
include_once 'connect.php';
$datum1 = $_POST['datum1'];

$query = 'DELETE FROM `DatumLijst` WHERE datum1 = "'.$datum1.'"';

mysqli_query($connection,$query);
mysqli_close($connection);
header("location: administratie.php");