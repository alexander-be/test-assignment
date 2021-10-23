<?php 
require '../Private/init.php';


function add_product ( $sku, $name, $type, $price ) {
    global $database;
    $query = "INSERT INTO products ( sku, name, type, price ) VALUES ( '$sku', '$name', '$type', '$price' )";
    mysqli_query( $database, $query);

    $updateSpecAtr = '';
    $size = $_POST['size'];
    $weight = $_POST['weight'];
    $height = $_POST['height'];
    $width = $_POST['width'];
    $length = $_POST['length'];

    if ( $type == 'disc' ) {
        $updateSpecAtr = "UPDATE products SET size = '$size' WHERE sku = '$sku'";
    } else if ( $type == 'book' ) {
        $updateSpecAtr = "UPDATE products SET weight = '$weight' WHERE sku = '$sku'";
    } else if ( $type == 'furniture' ) {
        $updateSpecAtr = "UPDATE products SET height = '$height', width = '$width',length = '$length' WHERE sku = '$sku'";
    };

    mysqli_query( $database, $updateSpecAtr );
    header('Location:http://localhost:8888/SCANDIWEB/Public/index.php');
    die();
}