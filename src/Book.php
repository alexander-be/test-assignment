<?php


class Book extends AbstractProduct
{
    private $weight;

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    public function showIndividualData()
    {
        return '<span id="size">Weight: ' . $this->getWeight() . 'KG</span>';
    }
}