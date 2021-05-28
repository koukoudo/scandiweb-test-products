<?php

abstract class Product
{
    protected $sku;
    protected $name;
    protected $price;

    abstract function __construct($input);

    abstract function getProduct();
}

class DVD extends Product
{
    protected $size;

    public function __construct($input)
    {
        $this->sku = 'DVD'.time();
        $this->name = $input['name'];
        $this->price = $input['price'];
        $this->size = $input['size'];
    }

    public function getProduct(): string
    {
        $attributes = 'Size: '.$this->size.'MB';
        $result = "('".$this->sku."','".$this->name."','".$this->price."','".$attributes."')";
        return $result;
    }
}

class Book extends Product
{
    protected $weight;

    public function __construct($input)
    {
        $this->sku = 'BK'.time();
        $this->name = $input['name'];
        $this->price = $input['price'];
        $this->weight = $input['weight'];
    }

    public function getProduct(): string
    {
        $attributes = 'Weight: '.$this->weight.'KG';
        $result = "('".$this->sku."','".$this->name."','".$this->price."','".$attributes."')";
        return $result;
    }

}

class Furniture extends Product
{
    protected $height;
    protected $width;
    protected $length;

    public function __construct($input)
    {
        $this->sku = 'FRN'.time();
        $this->name = $input['name'];
        $this->price = $input['price'];
        $this->height = $input['height'];
        $this->width = $input['width'];
        $this->length = $input['length'];
    }

    public function getProduct(): string
    {
        $attributes = 'Dimension: '.$this->height.'x'.$this->width.'x'.$this->length.'CM';
        $result = "('".$this->sku."','".$this->name."','".$this->price."','".$attributes."')";
        return $result;
    }

}
