<?php include("operaciones.php");
session_start();
echo $_SESSION['operacion']->suma();
?>
<meta http-equiv="refresh" content="3;URL=menu.html">   