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

$ford = new Car('Ford', 'Mustang');
$ford->setFuel('Gasoline');
echo $ford->showInfo();
