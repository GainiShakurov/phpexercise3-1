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

$tv = new TV();
$tv->setModel('lg')->setDiagonal('45');
echo 'Телевизор. Модель - ' . $tv->getModel() . ', цена - ' . $tv->getPrice() . ', диагональ - ' . $tv->getDiagonal() . '<br />' ;

$pen = new BallPen();
$pen->setPrice('50')->setColor('black');
echo 'Ручка. Цена - ' . $pen->getPrice() . ', цвет - ' . $pen->getColor() . '<br />' ;

$duck = new Duck();
$duck->setPrice('500')->setNumber('10');
echo 'Утка. Цена - ' . $duck->getPrice() . ', количество - ' . $duck->getNumber() . '<br />' ;

$product = new Product();
$product->setName('Хлеб');
echo 'Продукт. Название - ' . $product->getName() . ', цена - ' . $product->getPrice() . '<br />' ;