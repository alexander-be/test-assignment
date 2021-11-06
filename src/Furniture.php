<?php

require_once 'AbstractProduct.php';

class Furniture extends AbstractProduct
{
    public function showUniqueValues()
    {
        return '<span id="size">Dimensions: '.$this->getHeight().'x'.$this->getWidth().'x'.$this->getLength().'</span>';
    }
}