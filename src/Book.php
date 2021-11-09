<?php

require_once 'AbstractProduct.php';

class Book extends AbstractProduct
{
    public function showUniqueValues()
    {
        return '<span id="size">Weight: ' . $this->getWeight() . ' KG</span>';
    }
}
