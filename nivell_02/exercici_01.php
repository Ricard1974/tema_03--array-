<?php
echo "Crea un programa que contingui dos arrays de nombres enters/floats. Un cop creats, mostra per pantalla el resultat de:

La intersecció dels dos arrays (nombres en comú)
La mescla dels dos arrays.";

$primer_array=[2,4,6,77,8,64,33];
$segon_array=[2,4.7,6,77.66,8.89,64,33.99];


$resultado_interseccion= array_intersect($primer_array, $segon_array);

$resultado_mezcla= array_merge($primer_array, $segon_array);
echo "<pre>";
echo "Primer array <br/>";
print_r($primer_array);
echo "Segundo array <br/>";
print_r($segon_array);
echo "Mezcla de los dos array con array_merge <br/>";
print_r($resultado_mezcla);
echo "Interseccion de los dos array con array_intersect <br/>";
print_r($resultado_interseccion);
echo "</pre>";
?>