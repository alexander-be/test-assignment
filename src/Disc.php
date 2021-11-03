<?php

require 'AbstractProduct.php';

class Disc extends AbstractProduct
{
    private $size;

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size)
    {
        $this->size = $size;
    }

    public function showIndividualData()
    {
        return '<span id="size">Size: '.$this->getSize().' MB</span>';
    }
}