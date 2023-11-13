<?php

// Mostrar per pantalla la mida de l’array anterior i posteriorment 
// elimina un element de l’array anterior. Després d'eliminar l'element, 
// les claus senceres han de ser normalitzades(s’han de reorganitzar els seus 
// índexs). Mostra per última vegada la mida de l’array.


echo "<h1>Exercici 2</h1>";


$x = array (10, 20, 30, 40, 50,60);

echo('<pre>'); 
echo('Array principal: <br/>'); 
print_r($x);
echo('</pre>');

unset($x[1]); // quitamos el 20 que esta en la posicion 1

echo('Extraccio de clau amb unset $x[1]: <br/>'); 

echo('<pre>'); 
print_r($x);
echo('</pre>');



echo('Reorganitzar Index del array amb array_values($x): <br/>'); 

$s = array_values($x);
echo('<pre>'); 
print_r($s);
echo('</pre>');

?>