<?php

class Product
{
    private $sku;
    private $name;
    private $price;
    private $type;
    private $size = 'null';
    private $weight = 'null';
    private $height = 'null';
    private $width = 'null';
    private $length = 'null';

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @param mixed $sku
     */
    public function setSku($sku)
    {
        $this->sku = $sku;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    public function getSize()
    {
        return $this->size;
    }

    public function setSize($size)
    {
        if (!empty($size)) {
            $this->size = $size;
        }

    }

    public function getWeight()
    {
        return $this->weight;
    }

    public function setWeight($weight)
    {
        if (!empty($weight)) {
            $this->weight = $weight;
        }
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function setHeight($height)
    {
        if (!empty($height)) {
            $this->height = $height;
        }
    }

    public function getLength()
    {
        return $this->length;
    }

    public function setLength($length)
    {
        if (!empty($length)) {
            $this->length = $length;
        }
    }


    public function getWidth()
    {
        return $this->width;
    }

    public function setWidth($width)
    {
        if (!empty($width)) {
            $this->width = $width;
        }
    }
}