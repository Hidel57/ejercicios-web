<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fibonacci</title>
</head>
<body>
    <?php
    $n=$_GET['n'];
    function fibonacci ($n)
    {
        if ($n==0 or $n==1)
            return $n;
        else
              return fibonacci($n-2)+fibonacci($n-1);
    }
    echo "El fibonacci de $n es : ".fibonacci($n);
    ?>
</body>
</html>