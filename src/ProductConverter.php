<?php

require 'Disc.php';
require 'Book.php';
require 'Furniture.php';

class ProductConverter
{
    public function create(array $productArray)
    {
        if ($productArray['type'] === 'disc') {
            $product = new Disc();
            $product->setSize($productArray['size']);
        } elseif ($productArray['type'] === 'book') {
            $product = new Book();
            $product->setWeight($productArray['weight']);
        } elseif ($productArray['type'] === 'furniture') {
            $product = new Furniture();
            $product->setHeight($productArray['height']);
            $product->setWidth($productArray['width']);
            $product->setLength($productArray['length']);
        } 
        $product->setId($productArray['id']);
        $product->setName($productArray['name']);
        $product->setSku($productArray['sku']);
        $product->setPrice($productArray['price']);

        return $product;
    }
}