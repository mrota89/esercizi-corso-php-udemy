<?php
declare(strict_types=1);

/**
 * PHP 8
 * union types
 * CLASSI, INTERFACE, callable,iterable, array, string, int, bool,float,object, mixed, self, parent
 * type|type
 * int|float
 */
   class B {
     public string|Stringable $name;
   }
   function test(){
      echo 'Test'.PHP_EOL;
   }
    function somma(int|float $a, int|float $b, callable $c) : float|null {
        $c();

    return $a + $b;
    }
 $test = function(){
     echo 'Test'.PHP_EOL;
 };
    echo somma(5.5,5.6, $test);


