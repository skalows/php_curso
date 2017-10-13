<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    $x = 8;
    $y = 0;

    //while simple con condicion simple
    while ($y <= $x) {
      //ejemplo de break en while
    /*  if ($y == 5) {
        echo "<p>la variable ahora vale 5</p>";
        break;
      }
      */
      echo "<p>la variable x es mayor y este es su valor: $y</p>";
      $y++;
    }

    //ejemplo sentencia do while
  /*  do {
      echo "<p>el valor del contador es de: $y </p>";
      $y++;
    } while ($y <= $x);
*/


     ?>

  </body>
</html>
