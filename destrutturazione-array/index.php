<?php
declare(strict_types=1);

//destrutturazione array standard, salvo ogni valore dell'array in una variabile
$arr = [1, 2, 3];

list($a, $b, $c) = $arr;
[$a, $b, $c] = $arr; //versione compatta

var_dump($a, $b, $c);//int(1), int(2), int(3)

//destrutturazione array associativi
$userData = ['name' => 'Mario', 'lastname' => 'Rossi'];

//salvo in un $variabile il valore corrispondente alla 'chiave'
list('name' => $name, 'lastname' => $lastname) = $userData;
['name' => $name, 'lastname' => $lastname] = $userData;//versione compatta

var_dump($name, $lastname);//string(5) "Mario", string(5) "Rossi"

//destrutturazione array di array
$usersData = [
    ['name' => 'Mario', 'lastname' => 'Rossi'],
    ['name' => 'Carlo', 'lastname' => 'Bianchi'],
];

foreach($usersData as ['name' => $name, 'lastname' => $lastname]) {
    var_dump($name . ' ' . $lastname);
}