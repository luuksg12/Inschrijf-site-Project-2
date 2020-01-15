<?php
session_start();
session_destroy();
/*je wordt terug gestuurd naar de juiste pagina. Want je verliest het recht op de pagina waar je nu zit.*/
header('Location: index.php');
?>