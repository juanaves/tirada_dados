<?php

echo 'Escribe un script PHP que realice la simulación de lanzar 5 dados y
 muestre una imagen con los valores obtenidos en cada uno de los dados.<br>';
 echo ' Entre cada visualizacion de los dado abra un intervalo de 3 segundos';
 echo ' <pre>Para ello deberas utilizar la funcion sleep
 por ejemplo
  // dormir durante 10 segundos
 sleep(10)</pre>';

 echo' Cuando termine la simulacion de la tirada me debera aparecer la suma de los
 numeros que han aparecido en los dados';
 $suma=0;
 for ($i=0;$i<5;$i++)
 {
     $numero=rand(1,6);
     
     switch($numero)
     {
         case 1:echo'<img src="imagenes_dados/uno.jpg" alt="uno" width="128" height="128">';break;
         case 2:echo'<img src="imagenes_dados/dos.jpg" alt="dos" width="128" height="128">';break;
         case 3:echo'<img src="imagenes_dados/tres.jpg" alt="tres" width="128" height="128">';break;
         case 4:echo'<img src="imagenes_dados/cuatro.jpg" alt="cuatro" width="128" height="128">';break;
         case 5:echo'<img src="imagenes_dados/cinco.jpg" alt="cinco" width="128" height="128">';break;
         case 6:echo'<img src="imagenes_dados/seis.jpg" alt="seis" width="128" height="128">';break;

    }
    sleep(1);
    $suma+=$numero;


}
echo 'La suma es : ',$suma;
