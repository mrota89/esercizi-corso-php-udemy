<?php
declare(strict_types=1);

/*mettendo il punto interrogativo davanti al parametro, si indica che tale parametro accetta
anche argomento null*/
function sum_one(?int $a, ?int $b) : int {
 return $a + $b;
}

$result_one = sum_one(null, null);
var_dump($result_one); //int(0)

//alternativa con il default in fase di dichiarazione
function sum_one_default(?int $a = null, ?int $b = null) : int {
    return $a + $b;
}
//se non voglio passare un argomento, lascio vuoto (non scrivo null)
$result_one_default = sum_one_default(2);
var_dump($result_one_default); //int(2)


//stessa cosa si può fare per il return 
function sum_two(?int $a, ?int $b) : ?int {
    if($a === null && $b === null) {
        return null;
    }
    return $a + $b;
}

$result_two = sum_two(null, null);
var_dump($result_two); //null