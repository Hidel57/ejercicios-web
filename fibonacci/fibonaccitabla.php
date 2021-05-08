<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Documento sin título</title>
</head>

<body>
 <?php
 $n=$_GET["n"];
 ?>
 <table border="2">
 <tr>
	<th>No</th>
	<th>fibonacci</th>
</tr>
 <?php
 function fibonacci($n) {
	$f0=1;
	$f1=1;
	if ($n==0){
		echo '<tr>';
		echo '<td>'.$n.'</td>';
		echo '<td>'.$f0.'</td>';
		echo '</tr>';
	}
	if ($n==1){
		echo '<tr>';
		echo '<td>'.$n.'</td>';
		echo '<td>'.$f0.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>'.$n.'</td>';
		echo '<td>'.$f1.'</td>';
		echo '</tr>';
	}
	if ($n>1) {
		echo '<tr>';
		echo '<td>'.'0'.'</td>';
		echo '<td>'.$f0.'</td>';
		echo '</tr>';
		echo '<tr>';
		echo '<td>'.'1'.'</td>';
		echo '<td>'.$f1.'</td>';
		echo '</tr>';
	for($i=2;$i<=$n;$i++)
	{
		$f=$f0+$f1;
		$f0=$f1;
		$f1=$f;
		echo '<tr>';
		echo '<td>'.$i.'</td>';
		echo '<td>'.$f.'</td>';
		echo '</tr>';
	}
	}
}
echo fibonacci($n);
 ?>
 </table>
</body>
</html>