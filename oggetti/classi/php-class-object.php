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
 * con i metodi setter e getter posso accedere e modificare una proprietà, protetta o privata, di un oggetto dall'esterno. Il vantaggio di usare i metodi setter e getter, risiede anche nel fatto di poter controllare cosa si sta passando all'oggetto, ad esempio verificandone il tipo.
 */
class Car {
   public $color;
   protected $fuel;

   function __construct($customColor, $customFuel) {
      $this->color = $customColor;
      $this->fuel = $customFuel;
   }

   public function getFuel() //getter
   {
       return $this->fuel;
   }

   public function setFuel(string $carburante) //setter
   {
      $this->fuel= $carburante;
   }
}

$auto = new Car('rosso', 'benzina');

//cambio il colore della proprietà pubblica 'colore', quindi accessibile e modificabile dall'esterno
$auto->color = "blue"; //color: blue

//accedo e modifico la proprietà protetta fuel con i metodi setter e getter
$auto->getFuel();
$auto->setFuel('gasolio');

