<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> estructura switch en php </title>
  </head>
  <body>
    <?php
    $opcion = 3;

    switch ($opcion) {
      case 1:
        echo "esta es la opcion 1";
        break;
      case 2:
        echo "esta es la opcion 2";
        break;
      case 3:
        echo "esta es la opcion 3";
        break;
        default:
        echo "esta es la opcion predeterminada";
        break;
    }

     ?>
  </body>
</html>
