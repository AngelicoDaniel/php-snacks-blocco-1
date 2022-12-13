<!-- Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->

<?php

$studenti = [
    [
        'nome' => 'Paolo',
        'cognome' => 'Rossi',
        'voti' => [7, 8, 3, 5, 6]
    ],
    [
        'nome' => 'Roberto',
        'cognome' => 'Baggio',
        'voti' => [7, 2, 5, 9, 6]
    ],   
    [
        'nome' => 'Gianni',
        'cognome' => 'Rivera',
        'voti' => [1, 8, 3, 3, 10]
    ],   
    [
        'nome' => 'Jose',
        'cognome' => 'Altafini',
        'voti' => [6, 6, 9, 2, 4]
    ],

    
];

function media($voti) {
    $somma = 0;

    for ($i=0; $i < count($voti); $i++) { 
        $somma += $voti[$i];
    }

    $media = $somma / count($voti);

    return $media;
};


for ($i=0; $i < count($studenti); $i++) { 
    echo '<br>';
    echo $studenti[$i]['nome'] . ' ' . $studenti[$i]['cognome'] ;
}

?>