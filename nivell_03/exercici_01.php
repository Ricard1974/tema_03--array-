Donat un array d’enters, fes un programa que:

Retorni cada valor de l’array elevat al cub fent servir la funció array_map().
<?php



$testArray = [1,2,3,5,12,22];
$result = array_map(fn($element) => pow($element, 3), $testArray);


echo "<pre>";

print_r($result);

echo "<pre>";


?>