<?php

class Database
{
    public function addProduct(Product $product)
    {
        $database = mysqli_connect( DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE,DB_PORT );

        $name = $product->getName();
        $sku = $product->getSku();
        $type = $product->getType();
        $price = $product->getPrice();
        $size = $product->getSize();
        $weight = $product->getWeight();
        $height = $product->getHeight();
        $width = $product->getWidth();
        $length = $product->getLength();

        $query = "INSERT INTO products (sku, name, type, price) VALUES ( '$sku', '$name', '$type', '$price' )";
        $result = mysqli_query( $database, $query);

        if ( ! $result ) {
            exit( mysqli_error( $database ) );
        } else {
            $addCustom = "UPDATE products SET size = $size, height = $height, weight = $weight, length = $length, width = $width, length = $length WHERE sku = '$sku'";
            return mysqli_query( $database, $addCustom );
        }
    }
}