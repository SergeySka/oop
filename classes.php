<?php
class Car {
  public $brand;
  public $color;
  public $body;
  public $year;
  public $price;
    public function __construct($brand, $year, $price) {
      $this->brand = $brand;
      $this->year = $year;
      $this->price = $price;
    }
}
$bmw = new Car('bmw', 2017, 150000);
$bmw->color = 'white';
$bmw->body = 'sedan';
$audi = new Car('audi', 2016, 275000);
$audi->color = 'black';
$audi->body = 'coupe';

class TV {
  public $brand;
  public $size;
  public $price;
    public function __construct($brand, $price) {
      $this->brand = $brand;
      $this->price = $price;
    }
}
$samsung = new TV('samsung', 500);
$samsung->size = '32';
$toshiba = new TV('toshiba', 690);
$toshiba->size = '40';

class Pen {
  public $brand;
  public $color;
  public $inkColor;
  public $price;
  public function getDiscountPrice() {
    $price = $this->price - 3;
  }
}
$parker = new Pen();
$parker->brand = 'parker';
$parker->color = 'silver';
$parker->inkColor = 'blue';
$parker->price = '15';
$pilot = new Pen();
$pilot->brand = 'pilot';
$pilot->color = 'yellow';
$pilot->inkColor = 'black';
$pilot->price = '7';
class Duck {
  public $weight;
  public $age;
  public $sex;
  public function __construct($weight) {
      $this->weight = $weight;
      }
  public function halfDuck {
      $weight = $this->weight / 2;
  }
  
}
$firstDuck = new Duck(5);
$firstDuck->age = '2';
$firstDuck->sex = 'male';
$secondDuck = new Duck(7);
$secondDuck->age = '3';
$secondDuck->sex = 'female';
class Product {
  public $title;
  public $material;
  public $price;
  public function __construct($title, $material) {
      $this->title = $title;
      $this->material = $material;
      }
}
$table = new Product('table', 'wood');
$table->price = '75';
$cup = new Product('cup', 'glass');
$cup->price = '6';
?>
