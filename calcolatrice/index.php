<?php

//$numbers è uno spread operator: accetta più argomenti e vengono passati alla funzione in un unico array
function mathOp ($op,...$numbers) {

    $result = 0;

    if(empty($numbers)) {
        echo 'Non sono stati inseriti numeri';
        return $result = null;
    }

    switch ($op) {

        case '+';
        $result = array_sum ($numbers);
        break;

        case '*';
        //$result = 1 perchè altrimenti moltiplicherebbe per 0
        $result = 1;
        foreach ($numbers as $number) {
            $result *= $number;
        }
        break;

        case '-';
        //assegno il primo valore dell'array
        $result = $numbers[0];

        //al sottraendo assegno il gli altri valori, a partire da quello in posizione [1]
        $underlinings = array_slice($numbers, 1);

        foreach ($underlinings as $underlining) {
            $result -= $underlining;
        }
        break;

        case '/';
        $result = $numbers[0];
        $dividers = array_slice($numbers, 1);
        foreach ($dividers as $divider) {
            $result /= $divider;
        }
        break;

        //in caso il parametro $op venga lasciato vuoto o passato un argomento non valido
        default:
        echo 'inserire un operatore valido';
        $result = null;
    }
    return $result;
}

echo mathOp('+', 4,6);
echo '<br>';
echo mathOp('-', 3,7,1);
echo '<br>';
echo mathOp('/', 10,7);
echo '<br>';
echo mathOp('*', 12,9);