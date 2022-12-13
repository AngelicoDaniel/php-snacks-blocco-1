<!-- Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

$newArr = [];

for ($i=0; $i < 15; $i++) { 

    $randomNumber = rand(1, 100);

    if (!in_array($randomNumber, $newArr)) {        
        $newArr[] = $randomNumber;
    } else {
        !$newArr[] = $randomNumber;
    };
};
var_dump($newArr)


?>