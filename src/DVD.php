<?php

require_once 'AbstractProduct.php';

class DVD extends AbstractProduct
{
    public function showUniqueValues()
    {
        return '<span id="size">Size: ' . $this->getSize() . ' MB</span>';
    }
}
