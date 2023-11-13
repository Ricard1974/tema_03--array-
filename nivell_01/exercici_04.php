<?php


echo "<h1>Array asociativo</h1>";
echo "<h3>Fes un array associatiu que representi informació de tu mateix/a. En concret ha d’incloure:

    nom
    edat
    email
    menjar favorit</h3>";


$array=[
    "nom" => "Ricard",
    "edat" => 49,
    "email" => "esonoimporta@aaa.com",
    "Menjar preferit" => "Filet",
];
echo " <pre> ";
var_dump($array);
echo "</pre>";
echo " <pre> ";
print_r($array);
echo "</pre>";

?>