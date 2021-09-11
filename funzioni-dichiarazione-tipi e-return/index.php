<?php
declare(strict_types=1);
?> 

<?php
/*
in php si può definire la tipologia di parametri di una funzione. I tipi sono: 
int, string, bool, float, callable. Allo stesso modo si può definire il return.
*/

//qui dichiaro sia la tipologia dei parametri che il tipo di return (:int)
function somma (int $a, int $b):int {
    return $a+$b;
}

echo somma('5', 5);//10

//in questo caso, passando un argomento di tipo stringa, php fa la conversione in intero,
//ossia la tipologia indicata in fase di dichiarazione 
echo somma('5', 5);//10

/*
se all'inizio del file aggiungo declare(strict_types=1), php verificherà che 
la tipologia degli argomenti passati alla funzione corrispondano a quanto indicato
in fase di dichiarazione, e non effettuerà la conversione di tipi, ma restituirà un errore;
*/
echo somma('5', 5);//errore 500
?>
