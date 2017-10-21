<?php

    //con la funcion include se continua ejecutando el demas codigo
    //con la funcion require al marcar el error no continua ejecutando codigo

    echo "primer mensaje<br>";
    include("funciones.php");
    mensaje();
    echo "tercer mensaje";
 ?>
