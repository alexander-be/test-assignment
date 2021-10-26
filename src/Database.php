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
        
        $query = "INSERT INTO products (sku, name, type, price) VALUES ( '$sku', '$name', '$type', '$price' )";
        $result = mysqli_query( $database, $query);

        $size = $_POST['size'];
        $weight = $_POST['weight'];
        $height = $_POST['height'];
        $width = $_POST['width'];
        $length = $_POST['length'];


        $disc = 'UPDATE "products" SET "size" = "$size" WHERE "sku" = "$sku"';
        $book = 'UPDATE "products" SET "weight" = "$weight" WHERE "sku" = "$sku"';
        $furniture = 'UPDATE "products" SET "height" = "$height", "width" = "$width","length" = "$length" WHERE "sku" = "$sku"';

        return mysqli_query( $database, $$type );
    }
}