<?php


// $listado = array("php", "hola", "Html");
// if (in_array("aa", $listado)) {
//     echo "Si esta";
// }
// else {
//     echo "no esta";
// }

// // $array = array(1, 2, 3, 4);
// // foreach ($array as &$valor) {
// //     $valor = $valor * 2;
// //     echo $valor;
// // }

// foreach ($listado as &$valor) {
//     $valor = $valor;
//     if (in_array("php", $listado)) {
//         echo "Si esta";
//     }
//     else {
//         echo "no esta";
//     }
// }



// echo "<br/>";
// // =================================================


// $mystring = 'abc';
// $findme   = 'a';
// $pos = strpos($mystring, $findme);

// // Nótese el uso de ===. Puesto que == simple no funcionará como se espera
// // porque la posición de 'a' está en el 1° (primer) caracter.
// if ($pos === false) {
//     echo "La cadena '$findme' no fue encontrada en la cadena '$mystring'";
// } else {
//     echo "La cadena '$findme' fue encontrada en la cadena '$mystring'";
//     echo " y existe en la posición $pos";
// }



// // ====================================

// function array_search_partial($arr, $keyword) {
//     foreach($arr as $index => $string) {
//         if (strpos($string, $keyword) !== FALSE)
//             return $index;
//     }
// }




// // =============================================
// $users = array(
//     array('John', 'West'),
//     array('Peter', 'Parker'),
//     array('Ann', 'Jolie')
// );
// // Esto:
// foreach ($users as $user){
//     list($nombre, $apellido) = $user;
//     echo "Usuario: $nombre $apellido <br>";
// }
// // Devuelve lo mismo que esto:
// foreach ($users as list($nombre, $apellido))
// {
//     echo "Usuario: $nombre $apellido <br>";
// }
// // ===============================================


// $array = array('perro', 'gato', 'avestruz');
// // $array_num = count($array);
// // for ($i = 0; $i < $array_num; ++$i){
// //     print $array[$i];
// // }



// echo "<br/>";
// foreach ($array as $val) {
//     print $val;
// }


// echo "<br/>";
// foreach($array as $key => $val) {
//     print "$key = $val <br>";
// }


// echo "<br/>";


// $miArray = array("manzana", "banana", "pera", "uva");

// if (in_array("banana", $miArray)) {
//     echo "Encontrado!";
// } else {
//     echo "No encontrado.";
// }

// echo "<br/>";
// $miArray = array("manzana", "banana", "pera", "uva");
// $clave = array_search("banana", $miArray);

// if ($clave !== false) {
//     echo "Encontrado en la posición $clave!";
// } else {
//     echo "No encontrado.";
// }

// // ====================================================



// $miArray = array("manzana", "banana", "pera", "uva");
// $valorBuscado = "banana";

// foreach ($miArray as $valor) {
//     if ($valor == $valorBuscado) {
//         echo "Encontrado!= ".$valor;
//         break; // Puedes salir del bucle si encuentras el valor
//     }
// }

// echo "======================================<br/>";


// $miArray2 = array("nombre" => "Juan", "edad" => 30, "ciudad" => "Madrid");
// // $claveEncontrada = array_search("Juan", $miArray2, true);
// $claveEncontrada = strpos("b", );

// if ($claveEncontrada !== false) {
//     echo "Encontrado en la clave: $claveEncontrada!";
// } else {
//     echo "No encontrado.";
// }







// $cadena_de_texto = 'Esta es la frase donde haremos la búsqueda';
// $cadena_buscada   = 'la';
// $posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada);

// //se puede hacer la comparacion con 'false' o 'true' y los comparadores '===' o '!=='
// if ($posicion_coincidencia === false) {
//     echo "NO se ha encontrado la palabra deseada!!!!";
//     } else {
//             echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
//             }

// $posicion_coincidencia = strpos($cadena_de_texto, $cadena_buscada, 20);
// if ($posicion_coincidencia === false) {
//     echo "NO se ha encontrado la palabra deseada!!!!";
//     } else {
//             echo "Éxito!!! Se ha encontrado la palabra buscada en la posición: ".$posicion_coincidencia;
//             }





//             //Con valor strict a false
// $array = array(5, "45", "78", "17", "5");
// var_export ($array);
// $indice = array_search(5,$array,false);
// echo "El número 5 está en el indice: " . $indice;

// //Con valor strict a TRUE
// $array = array("45", "78", "17", "5");
// var_export ($array);
// $indice = array_search(5,$array,true);
// echo "El número 5 está en el indice: " . $indice;

$palabra="hola";

$array = array("hola", "http", "html", "ola", "php");
var_export ($array);
$indice = array_search($palabra,$array,true);
echo $palabra." está en el indice: " . $indice;



$provincias = ['Málaga', 'Valencia', 'Cádiz', 'Orense', 'Lugo', 'León', 'Toledo', 'Cuenca', 'Guadalajara', 'Jaén', 'Barcelona', 'Madrid'];

function arrayfilter($elements, $query) {
    $found = [];
    foreach($elements as $element) {
      if(strpos($element, $query) !== false) {
        array_push($found, $element);
      }
    }
    return $found;
} 

var_dump(arrayFilter($provincias, 'V'));











$cadena = "Aprendiendo a programar en PHP";

$posicion1 = strpos($cadena, "php");
$posicion2 = stripos($cadena, "php");
$posicion3 = strpos($cadena, "PHP");

// Devuelve: No se ha encontrado la cadena 'php'
if( $posicion1 === false )
    echo "No se ha encontrado la cadena 'php'<br />";
else
    echo "Cadena 'php' encontrada en la posición [".$posicion1."]<br />";

// Devuelve: Cadena 'php' encontrada en la posición [27]
if( $posicion2 === false )
    echo "No se ha encontrado la cadena 'php'<br />";
else
    echo "Cadena 'php' encontrada en la posición [".$posicion2."]<br />";

// Devuelve: Cadena 'PHP' encontrada en la posición [27]
if( $posicion3 === false )
    echo "No se ha encontrado la cadena 'PHP'<br />";
else
    echo "Cadena 'PHP' encontrada en la posición [".$posicion3."]<br />";



?>