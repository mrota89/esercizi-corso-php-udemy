<?php
/**
 * PHP 8
 * 28/01/2021
 * AUTHOR:hidran
 * named arguments
 */
function somma(int $a, int $b, callable $c) : int {
    $c();
    return $a + $b;
}
somma(b:5.6, a:10, c: function (){
    echo 'I am a callable';
});
$met = stristr(needle: 'Hidran', haystack: 'I have just met Hidran');
var_dump($met);

somma(5.6,  c: function (){
    echo 'I am a callable';
},b:10);

somma(5.6,10,  c: function (){
    echo 'I am a callable';
});
