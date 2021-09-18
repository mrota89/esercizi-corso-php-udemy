<?php

//argomenti di una funzione passati per riferimento e per valore

//array
$data = [
    'name' => 'John',
    'lastname' => 'Doe'
];

//oggetto delle classe standard class php
$obj = new stdClass();
$obj->name = 'John';
$obj->lastname = 'Doe';

//Variabile
$name = 'John Doe';

//funzione che modifica il valore 'name' dell'argomento passato alla funzione
function modifyVal($val) {
    if(is_object($val)) {
        $val->name = 'Marcello';
    } else if(is_array($val)) {
        $val['name'] = 'Marcello';
    } else {
        $val = 'Marcello';
    }

    echo "<h1>Valore nello scope della funzione</h1>";
    var_dump($val);

}

echo "<h1>Valore prima dell'esecuzione della funzione</h1>";
var_dump($obj);

//eseguo la funzione
modifyVal($obj);

echo "<h1>Valore dopo aver eseguito la funzione</h1>";
var_dump($obj);

/*passando l'array o la variabile(valore scalare) alla funzione, si nota che il valore viene
modificato solo nello scope della funzione, mentre al di fuori di quest'ultimo, 
la chiave/variabile riacquisisce il suo valore originale. Questo accade perchè entrambi sono passati
per valore, ossia la funzione sta lavorando su una copia di quel valore e non sul valore originale.
Per poter passare un array o una variabile per riferimento(come accade per gli oggetti), bisogna aggiungere,
in fase di dichiarazione della funzione, il simbolo "&" prima di ogni parametro.

passando l'oggetto alla funzione, si nota che il valore della proprietà viene sovrascritto
dalla funzione, dopo l'esecuzione della stessa. Questo perchè in PHP, gli oggetti vengono passati alla
funzione per riferimento, attraverso un Handler, che punta verso l'oggetto originale e viene di conseguenza mdificato.
*/