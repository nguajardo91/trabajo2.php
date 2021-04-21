<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Document</title>
</head>
<body>
<?php

//EJERCICIO 1, 2, 3
$n1 = 5;
$n2 = 9;
$n3 = 15;

if ($n1 > 0) {
    echo "<h1>$n1 es un número positivo</h1>";
    if ($n2 > 1 && $n2 < 10) {
        echo "<h1>$n2 es mayor a 1 y menor a 10</h1>";
    }
    
    if ($n3 > 10 || $n3 < 2) {
        echo "<h1>$n3 es mayor a 10 o menor a 2</h1>";
    }
} 


// EJERCICIO 4
$numero1 = 10;
$numero2 = 10;
$res1 = $numero1 + $numero2;
$res2 = $numero1 - $numero2;
$res3 = $numero2 * $numero1;
$res4 = $numero2 / $numero1;
$res5 = $numero2 % $numero1;

if ($numero1 > $numero2) {
    echo "<h1>$numero1 + $numero2 = $res1</h1>";
    echo "<h1>$numero1 - $numero2 = $res2</h1>";
}elseif ($numero1 < $numero2) {
    echo "<h1>$numero2 * $numero1 = $res3</h1>";
    echo "<h1>$numero2 / $numero1 = $res4</h1>";
    echo "<h1>$numero2 % $numero1 = $res5</h1>";
}elseif ($numero1 == $numero2) {
    echo "<h1> Los número ingresados son iguales</h1>";
}


?>   
</body>
</html>