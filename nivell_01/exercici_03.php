<?php




$lista = ['php', 'html', 'https', 'ajax','hola','verd','marron','violeta']; 

function filtrarArray($palabras, $consulta) {
    $encontrado = [];
    foreach($palabras as $palabra) {
      if(strpos($palabra, $consulta) !== false) {
        array_push($encontrado, $palabra);
      }
    }
    return $encontrado;
} 

echo "<pre>";
print_r ($lista);
echo "Buscar lletra t<br/>";
var_dump(filtrarArray($lista, 't'));

echo "Buscar lletra h <br/>";

print_r(filtrarArray($lista, 'h'));


echo "Buscar lletras ht <br/>";

print_r(filtrarArray($lista, 'ht'));
echo "</pre>";



?>