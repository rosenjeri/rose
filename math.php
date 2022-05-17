<?php
echo(pi());
echo(sqrt(64));
echo(round(0.60));
echo(round(0.49));
// case-sensitive constant name
define("GREETING","Welcome to W3schools.com!");
echo GREETING;
class Car {
    public $color;
    public $model;
    public function _construct($color, $model){
        $this->color = $color;
        $this->color = $model;
    }
    public function message(){
        return "My car is a " . $this->color . " " .
            $this->model . "!";
    }
}
$MyCar = new car("black", "Volvo");
echo  $myCar -> message();
echo "<br>";
$myCar = new Car("red","Toyota");
echo  $myCar ->message();
?>
