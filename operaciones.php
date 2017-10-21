<!DOCTYPE html>
<html>
<head>
  <title> operaciones basicas en php </title>
  <meta charset="utf-8">
</head>

<body>
<?php
$x=5;
$y=10;

$result1 = $x+$y;
$result2 = $x-$y;
$result3 = $x*$y;
$result4 = $x/$y;
$result5 = $x%$y;
$result6 = $x.$y;

echo "<p>Esto es una Suma: ".$result1."</p>";
echo "<p>Esto es una Resta: ".$result2."</p>";
echo "<p>Esto es una Multiplicación: ".$result3."</p>";
echo "<p>Esto es una Division: ".$result4."</p>";
echo "<p>Esto es un Resudio: ".$result5."</p>";
echo "<p>Esto es una Concatenación: ".$result6."</p>";
 ?>
 </body>
</html>
