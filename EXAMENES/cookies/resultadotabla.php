<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
echo $_GET['operacion'].'<br>';
$a=$_COOKIE['a'];

switch ($_GET['operacion']) {
	case 'suma':
        for($i=1; $i<=10; $i++) {
            echo $a.' + '.$i.' = ';
            echo $a+$i.'<br>';
        }
		break;
	
	case 'resta':
		# code...
		for($i=1; $i<=10; $i++) {
            echo $a.' - '.$i.' = ';
            echo $a-$i.'<br>';
        }
		break;
	case 'multiplicacion':
        for($i=1; $i<=10; $i++) {
            echo $a.' * '.$i.' = ';
            echo $a*$i.'<br>';
        }
	default:
		# code...
		break;
}
?>
<meta http-equiv="refresh" content="2; URL=menu.php?a=<?php echo $a; ?>"/>
</body>
</html>