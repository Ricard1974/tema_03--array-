Donat un array d’strings, fes un programa que:

Retorni un array on només estiguin els strings que tinguin un nom parell de caràcters usant la funció array_filter().



<?php

$elArray=['azul','dos','tres','tio','mano','perro','gata','arbol'];

$result = array_filter($elArray, fn($element) => strlen($element) % 2 == 0);

echo "<pre>";

print_r($result);

echo "<pre>";


?>