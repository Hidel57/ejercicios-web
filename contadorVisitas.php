<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style2.css">
	<title>Ejercio 3</title>
</head>
<body>
	<h2>EJERCICIO 3</h2>
<?php 
if (isset($_COOKIE['contador']))
{
    $valor=$_COOKIE['contador']+1;
	echo "<p class='azultexto'>Es la visita $valor - Gracias por ser un visitante frecuente usted visito este sitio $valor</p>";
	setcookie("contador",$valor,time()+3600); /* expira en 1 hora */
	}
else
{
	echo "<p class='azultexto'>Es la visita 1 - BIENVENIDO </p>";
	setcookie("contador",1,time()+3600); /* expira en 1 hora */
    
}
?>
</body>
</html>

