<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
    //primera forma de declarar los arreglos y asignarles valor
    $arreglo[0] = 1;
    $arreglo[1] = 2;

    //segunda forma mas eficaz de declarar un arreglo
    $ar = array(1,2,3,4);

    //tercera forma de declarar un arreglo asociativo
    $arreglito = array("cero"=> 0, "uno"=> 1, "dos"=> 2, "tres"=> 3);

    //ejemplo de arreglo dimensional
    $ard =array(array(2,5,1),array(3,6,7),array(4,9,8));


    //ejemplo como imprimir arreglo asociativo
    echo "<p>".$arreglito["cero"]."</p>";

    echo "<p>$ar[2]</p>";

    //ejemplo de como imprimir un arreglo dimensional
    echo $ard[1][2];

     ?>

  </body>
</html>
