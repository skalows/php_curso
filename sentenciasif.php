<!DOCTYPE html>
<html>
<head>

</head>

<body>
<?php

    $x = 10;
    $y = 6;
    //primer operador (or)
    if (($x<$y) || (7==7)) {
      echo "<p>primero if se ejecuta</p>";
    }
    else {
      echo "<p>primer else se ejecuta</p>";
    }

    //segundo operador (and)
    if (($x<$y) && (7==7)) {
      echo "<p>segundo if se ejecuta</p>";
    }
    else {
      echo "<p>segundo else se ejecuta</p>";
    }

    //tercer operador (igual que)
    if ($x!=$y) {
      echo "<p>tercer if se ejecuta</p>";
    }
    else {
      echo "<p>tercer else se ejecuta</p>";
    }

    //cuarto operador (negacion)
    if (!(($x<$y) || (7==7))) {
      echo "<p>cuarto if se ejecuta</p>";
    }
    else {
      echo "<p>cuarto else se ejecuta</p>";
    }
 ?>

</body>

</html>
