<?php

/** * Class Car */
class Car {

    // public properties
    public $brand = null;
    public $model = null;

    // private properties
    private $fuel = null;
    private $color = null;

    public function setColor() {
      switch ($this->color) {
    case 'green':
        $this->color = 'green';
        break;
    case 'red':
        $this->color = 'red';
        break;
    case 'blue':
        $this->color = 'blue';
        break;
        default:
          $this->color = 'green';
        break;

}
    }

    public function __construct($brand, $model, $color = 'green') {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
                $this->setColor();
    }

    public function showInfo() {
        return 'Merk: ' . $this->brand . ', model: ' . $this->model . ', kleur: ' . $this->color . ', brandstof: ' . $this->fuel;
    }

    /** * Getter for fuel */
    public function getFuel() {
        return $this->fuel;
    }

    /** * Setter for fuel */
    public function setFuel($fuel) {
        $this->fuel = $fuel;
    }

}


/** * Class Person */
class Person
{

    public $name = '';
    private $age = null;

    public function checkAge() {
      if($this->age > 18) {
        return (true);
      }
      elseif ($this->age < 18) {
        return (false);
      }
    }

    public function getAge() {
        return $this->age;
    }

    public function setAge($value) {
        return $this->age = $value;
    }

    public function __construct($name, $age) {
        $this->checkAge();
        $this->name = $name;
        $this->age = $age;
    }

    public function showInfo() {
        return '<br> Dit is ' . $this->name . ' en zijn/haar leeftijd is ' . $this->age . '.';
    }

}


/** * Main code */
$tim = new Person('Tim', 21);
echo $tim->showInfo();
echo '<br> Boolean is ' . $tim->checkAge();

$sharon = new Person('Sharon', 25);
echo $sharon->showInfo();
echo '<br> Boolean is ' . $sharon->checkAge() . '<br>';

$ford = new Car('Ford', 'Mustang');
$ford->setFuel('Gasoline');
echo $ford->showInfo();
