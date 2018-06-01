<?php

class Car
{
    protected $price = 100;
    protected $color;
    protected $model;

    public function getColor()
    {
        return $this->color;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }
}

class TV
{
    protected $price = 110;
    protected $diagonal;
    protected $model;

    public function getDiagonal()
    {
        return $this->diagonal;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setDiagonal($diagonal)
    {
        $this->diagonal = $diagonal;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function setModel($model)
    {
        $this->model = $model;
        return $this;
    }
}

class BallPen
{
    protected $price = 120;
    protected $color;

    public function getColor()
    {
        return $this->color;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setColor($color)
    {
        $this->color = $color;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

}

class Duck
{
    protected $price = 130;
    protected $number;

    public function getNumber()
    {
        return $this->number;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setNumber($number)
    {
        $this->number = $number;
        return $this;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

}

class Product
{
    protected $price = 140;
    protected $name;

    public function getPrice()
    {
        return $this->price;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    public function setName($name)
    {
        $this->name = $name;
        return $this;
    }

}

$toyota = new Car();
$toyota->setModel('toyota')->setColor('red');
echo 'Машина. Модель - ' . $toyota->getModel() . ', цена - ' . $toyota->getPrice() . ', цвет - ' . $toyota->getColor() . '<br />';

$audi = new Car();
$audi->setModel('audi')->setColor('black');
echo 'Машина. Модель - ' . $audi->getModel() . ', цена - ' . $audi->getPrice() . ', цвет - ' . $audi->getColor() . '<br />';

$lg = new TV();
$lg->setModel('lg')->setDiagonal('45');
echo 'Телевизор. Модель - ' . $lg->getModel() . ', цена - ' . $lg->getPrice() . ', диагональ - ' . $lg->getDiagonal() . '<br />' ;

$samsung = new TV();
$samsung->setModel('samsung')->setDiagonal('42');
echo 'Телевизор. Модель - ' . $samsung->getModel() . ', цена - ' . $samsung->getPrice() . ', диагональ - ' . $samsung->getDiagonal() . '<br />' ;

$pen1 = new BallPen();
$pen1->setPrice('30')->setColor('blue');
echo 'Ручка. Цена - ' . $pen1->getPrice() . ', цвет - ' . $pen1->getColor() . '<br />' ;

$pen2 = new BallPen();
$pen2->setPrice('50')->setColor('black');
echo 'Ручка. Цена - ' . $pen2->getPrice() . ', цвет - ' . $pen2->getColor() . '<br />' ;

$duck1 = new Duck();
$duck1->setPrice('500')->setNumber('10');
echo 'Утка. Цена - ' . $duck1->getPrice() . ', количество - ' . $duck1->getNumber() . '<br />' ;

$duck2 = new Duck();
$duck2->setPrice('1000')->setNumber('7');
echo 'Утка. Цена - ' . $duck2->getPrice() . ', количество - ' . $duck2->getNumber() . '<br />' ;

$bread = new Product();
$bread->setName('Хлеб');
echo 'Продукт. Название - ' . $bread->getName() . ', цена - ' . $bread->getPrice() . '<br />' ;

$milk = new Product();
$milk->setName('Молоко');
echo 'Продукт. Название - ' . $milk->getName() . ', цена - ' . $milk->getPrice() . '<br />' ;