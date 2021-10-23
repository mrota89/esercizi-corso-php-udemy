 <!-- 
    le classi astratte non possono essere istanziate, e sono definite così perchè contengono almeno un metodo astratto.
    L'unico modo per utilizzarle è estenderle, ed implementare i metodi astratti in un altra classe.
-->

 <pre>
    <?php
    abstract class Car {
        
        protected $speed = 0;
        abstract protected function speedUp(int $v); //interface

        public function getSpeed() { //getter
            return $this->speed;
        }
    }

    class myCar extends Car {
        protected $speed = 0;
        public function speedUp(int $v) {
            $this->speed += $v;
        }
    }

    $car = new myCar;
    $car->speedUp(5);
    echo $car->getSpeed();
    ?>
</pre>