Crea un programa que llisti les notes dels/les alumnes d’una classe. 
Per això haurem d’utilitzar un array associatiu on la clau serà el nom de cada
 alumne. Cada alumne tindrà 5 notes (valorades del 0 al 10).

A més, crea una funció que, donades les notes de tots els/les alumnes, ens 
mostri tant la mitjana de la nota de cada alumne, com la nota mitjana de la 
classe sencera.


<?php


// $clase=array();


// $clase['Ana']= array(
//     "Mates"=>5,
//     "Historia"=>8,
//     "Arte"=>7,
//     "Informatica"=>7,
//     "Fisica"=>6,

// );

// $clase['Marta']= array(
//     "Mates"=>4,
//     "Historia"=>7,
//     "Arte"=>9,
//     "Informatica"=>5,
//     "Fisica"=>7,

// );

// $a = array(2, 4, 6, 8);
// echo "sum(a) = " . array_sum($a) . "\n";


// foreach ($clase as $key => $value) { 
//     echo $key . "<br/>"; 
//     foreach ($value as $sub_key => $sub_val) { 

//         // If sub_val is an array then again 
//         // iterate through each element of it 
//         // else simply print the value of sub_key 
//         // and sub_val 
//         if (is_array($sub_val)) { 
//             echo $sub_key . " : <br/>"; 
//             foreach ($sub_val as $k => $v) { 
//                 echo "\t" .$k . " = " . $v . "<br/>"; 
//             } 
//         } else { 
//             echo $sub_key . " = " . $sub_val . "<br/>"; 
//         } 
//     } 
// } 

// echo "<pre>";
// print_r($clase);
// echo "</pre>";










echo "<br>";




$alumnos = array(
    'Ana' => 5, 7, 8, 6, 9,
    'Baltasar' => 5, 5, 5, 5, 5,
    'Cesar' => 5, 7, 8, 6, 6,
);

foreach ($alumnos as $fila) {
  
        echo " $fila ";
    }

    echo "<br>";



echo "<pre>";
// print_r($alumnes[0]) ;
print_r($alumnos) ;
var_dump($alumnos);

// echo array_sum($alumnes[0])/5;
// echo array_sum($alumnes[0],[1])/5;
echo "</pre>";







// for ($row = 0; $row < 4; $row++) {
//     echo "<p><b>Row number $row</b></p>";
//     echo "<ul>";
//     for ($col = 0; $col < 6; $col++) {
//       echo "<li>".$alumnes[$row][$col]."</li>";
//     }
//     echo "</ul>";
//   }
?>