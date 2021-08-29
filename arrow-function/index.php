<?php
/* 

Le arrow function sono state introdotte in PHP 7.4 come sintassi più concisa per le funzioni anonime.

Sia le funzioni anonime che le arrow function vengono implementate utilizzando la classe Closure.

Le arrow function hanno la forma base fn (argument_list) => expr.

Le arrow function supportano le stesse funzionalità delle funzioni anonime, tranne per il fatto che ereditano le variabili dallo scope esterno.

*/

$y = 1;
 
$fn1 = fn($x) => $x + $y;

//con una funzione variabile si può fare la stessa cosa, utilizzando la keyword "use" per importare nello scope della funzione una variabile esterna:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};

echo($fn1(3));
?>