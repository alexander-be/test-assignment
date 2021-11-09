<?php

abstract class AbstractProduct
{
    private $id;
    private $name;
    private $sku;
    private $price;
    private $type;
    private $size = 'null';
    private $weight = 'null';
    private $height = 'null';
    private $width = 'null';
    private $length = 'null';

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = htmlspecialchars($name);
    }

    public function getSku()
    {
        return $this->sku;
    }

    public function setSku($sku)
    {
        $this->sku = htmlspecialchars($sku);
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = htmlspecialchars($price);
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = htmlspecialchars($type);
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        if (!empty($size)) {
            $this->size = htmlspecialchars($size);
        }
    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        if (!empty($weight)) {
            $this->weight = htmlspecialchars($weight);
        }
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        if (!empty($height)) {
            $this->height = htmlspecialchars($height);
        }
    }

    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        if (!empty($width)) {
            $this->width = htmlspecialchars($width);
        }
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        if (!empty($length)) {
            $this->length = htmlspecialchars($length);
        }
    }
}
