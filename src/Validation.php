<?php

class Validation
{
    public $error = false;
    public $errorUniques = false;
    public $errorInt = false;

    public function checkEmpty()
    {
        if (empty($_POST['sku']) || empty($_POST['name']) || empty($_POST['price']) || (empty($_POST['type']))) {
            return $this->error = true;
        }
    }

    public function checkEmptyUniques($product)
    {
        if ($product instanceof DVD && empty($_POST['size'])) {
            return $this->errorUniques = true;
        } elseif ($product instanceof Book && empty($_POST['weight'])) {
            return $this->errorUniques = true;
        } elseif ($product instanceof Furniture && empty($_POST['height']) && empty($_POST['width']) && empty($_POST['length'])) {
            return $this->errorUniques = true;
        }
    }

    public function checkIntegers($product)
    {
        if (!is_numeric($_POST['price'])) {
            return $this->errorInt = true;
        } elseif ($product instanceof DVD && !is_numeric($_POST['size'])) {
            return $this->errorInt = true;
        } elseif ($product instanceof Book && !is_numeric($_POST['weight'])) {
            return $this->errorInt = true;
        } elseif ($product instanceof Furniture && !is_numeric($_POST['height']) && !is_numeric($_POST['width']) && !is_numeric($_POST['length'])) {
            return $this->errorInt = true;
        }
    }

    public function displayError()
    {
        if ($this->error || $this->errorUniques) {
            return '<br><span id="error" style="color:red">Please make sure all fields are filled and type is selected.</span>';
            unset($_POST);
        } elseif ($this->errorInt) {
            return '<br><span id="error" style="color:red">Please use the right data.</span>';
            unset($_POST);
        }
    }
}
