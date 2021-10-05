<?php

//fake api
$url = 'https://jsonplaceholder.typicode.com/posts';

/*
* file_get_contents
* funzione che ritorna il contenuto di un file in una stringa
* come parametro principale accetta la stringa del $filename
*/
$data = file_get_contents($url);
var_dump($data); //ristorna un tipo string con tutto il json dell'api

//converto la stringa del json in un array php con json_decode
if($data) { //verifico che l'api restituisca effetivamente qualcosa
    $dataObj = json_decode($data);
    var_dump($dataObj); //ritorna un array di oggetti stdClass
}
