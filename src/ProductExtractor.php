<?php

require 'Disc.php';
require 'Book.php';
require 'Furniture.php';

class ProductExtractor
{
    public function create(array $productArray)
    {
        $product = new $productArray['type'];
        $product->setSize($productArray['size']);
        $product->setWeight($productArray['weight']);
        $product->setHeight($productArray['height']);
        $product->setWidth($productArray['width']);
        $product->setLength($productArray['length']);
        $product->setId($productArray['id']);
        $product->setName($productArray['name']);
        $product->setSku($productArray['sku']);
        $product->setPrice($productArray['price']);

        return $product;
    }
}