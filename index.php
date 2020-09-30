<?php
echo '<h1>Tirada de dados</h1>';
echo '<br>Escribe un script PHP que realice la simulación de lanzar 5 dados y
 muestre una imagen con los valores obtenidos en cada uno de los dados.<br>';
 

 echo' Cuando termine la simulacion de la tirada me debera aparecer la suma de los
 numeros que han aparecido en los dados<br>';
 $suma=0;
 for ($i=0;$i<5;$i++)
 {
     
     $numero=rand(1,6);
     
     switch($numero)
     {
         case 1:echo'<img src="imagenes/uno.jpg" alt="uno" width="128" height="128">';break;
         case 2:echo'<img src="imagenes/dos.jpg" alt="dos" width="128" height="128">';break;
         case 3:echo'<img src="imagenes/tres.jpg" alt="tres" width="128" height="128">';break;
         case 4:echo'<img src="imagenes/cuatro.jpg" alt="cuatro" width="128" height="128">';break;
         case 5:echo'<img src="imagenes/cinco.jpg" alt="cinco" width="128" height="128">';break;
         case 6:echo'<img src="imagenes/seis.jpg" alt="seis" width="128" height="128">';break;

    }
    
    $suma+=$numero;


}
echo '<br>La suma de los que han aparecido en los dados ha sido : ',$suma;
