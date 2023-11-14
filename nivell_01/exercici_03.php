<?php




$lista = ['php', 'html', 'https']; 
$caracter='1';
echo "<pre>";
print_r ($lista);
echo "</pre>";


function filtrar($lista,$caracter){
  foreach ($lista as $palabra) {
    if (strpos($palabra, $caracter) === false) {
        return false;
    }
}
return true;
}

$resultado = filtrar($lista, $caracter);
var_dump($resultado); // Esto mostrará: bool(true)




// function filtrarArray($palabras, $consulta) {
//     $encontrado = [];
//     foreach($palabras as $palabra) {
//       if(strpos($palabra, $consulta) !== false) {
//         array_push($encontrado, $palabra);
//       }
//     }
//     return $encontrado;
// } 

// echo "<pre>";
// print_r ($lista);
// echo "Buscar lletra t<br/>";
// var_dump(filtrarArray($lista, 't'));

// echo "Buscar lletra h <br/>";

// print_r(filtrarArray($lista, 'h'));


// echo "Buscar lletras ht <br/>";

// print_r(filtrarArray($lista, 'ht'));
// echo "</pre>";

// echo "Buscar lletras ht <br/>";

// print_r(filtrarArray($lista, '1'));
// echo "</pre>";



?>