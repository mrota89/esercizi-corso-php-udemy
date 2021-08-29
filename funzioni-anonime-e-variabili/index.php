<?php

/*
FUNZIONI VARIABILI 

Le funzioni variabili sono funzioni anonime (closure) assegnate ad una variabile,
e vengono eseguite richiamando la varibile stessa. 
Per le funzioni variabili, essendo assegnate appunto ad una varibile,
dopo la graffa di chiusura bisogna mettere il punto e virgola;
*/

//esempio funzione variabile
$somma = function($val, $val2) {
    echo ($val + $val2 . PHP_EOL);
};

/*
richiamo la funzione anonima attraverso la sua varibile.
PHP andrà a creare automaticamente un'istanza della classe Closure,
assegnandola alla variabile. 
In questo modo la funzione può essere chiamata aggiungendo 
le parentesi e gli eventuali argomenti.
*/
$somma(2, 3);

/* 
una funzione variabile non può essere chiamata prima della sua definizione,
cosa che invece è possibile fare con una funzione classica
*/

/*
Una funziona variabile può essere passata come argomento di un'altra funzione
*/
/*
in questo caso specifico che l'argomento della funzione deve esser una istanza della Closure, 
quindi una funzione variabile oppure una funzione classica
*/
function test(Closure $funzione_variabile) {
    $funzione_variabile(5, 5);
}

test($somma);

//-------------------------------------------------------------

/*
FUNZIONI ANONIME
 */

//esempio di funzione anonima utilizzata come callback all'interno di un'altra funzione
$arr = [1, 2, 3, 4];

//qui la funzione anonima viene eseguita all'interno della funzione PHP array_walk
array_walk($arr, function($val){
    echo($val * 2 . PHP_EOL);
});

//si può ottenere lo stesso risultato utilizzando una funzione variabile
$double = function($val){
    echo($val * 2 . PHP_EOL);
};
array_walk($arr, $double);