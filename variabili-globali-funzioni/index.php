<?php

//array
$data = [
    'name' => 'John',
    'lastname' => 'Doe'
];

//oggetto delle classe standard class php
$obj = new stdClass();
$obj->name = 'John';
$obj->lastname = 'Doe';

//Variabile(valore scalare)
$name = 'John Doe';
$val = 'Test';

/*PHP  all'interno di una funzione crea un ambiente che ha il suo scope, e che
non "vede" gli elementi al di fuori di quest'ultimo. 
Per importare gli elementi esterni all'interno della funzione esistono due keyword: global e $_GLOBAL*/
function modifyVal($val=null) {

    /*con global, si dice alla funzione di fare riferimento allo scope globale, quindi di 
    uscire dallo scope interno, e rendere di fatto visibile una variabile alla funzione
    Con global i valori sono passati per riferimento (vedi lezione 10), quindi i valori originali
    vengono modificati*/
    global $data;

    /* $_GLOBAL è una variabile super globale, che salva in un array tutte le variabili presenti
    nello scope globale*/
    $_GLOBAL['name']; //John Doe
}



