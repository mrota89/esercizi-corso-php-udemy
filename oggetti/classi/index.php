<?php
/**
 * Le proprietà di una classe possono essere:
 * public: la proprietà è accessibile da un qualsiasi punto del codice;
 * protected: la proprietà può essere accessibile dall'interno della classe o da una classe estesa
 * private: la proprietà è accessibile solo dall'interno della classe.
 * le funzioni dentro una classe sono chiamate metodi.
 * il metodo __construct() è un metodo magico in quanto viene chiamato quando viene istanziato un nuovo oggetto di una classe.
 * il metodo __construct() permette di passare dei parametri quando si istanzia un nuovo oggetto, permettendo di aggiungere caratteristiche all'oggetto stesso.
 * con $this posso accedere a qualunque variabile e funzione presente all'interno della classe, e rappresenta l'oggetto quando viene istanziato.
 */
class Car {
   public $color;
   public $fuel;

   function __construct ($customColor, $customFuel) {
      $this->color = $customColor;
      $this->fuel = $customFuel;
   }
}

$auto = new Car('rosso', 'benzina');

//cambio il colore della proprietà pubblica 'colore', quindi modificabile dall'esterno
$auto->color = "blue"; //color: blue