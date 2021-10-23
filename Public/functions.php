<?php 

define( 'DB_HOST', 'localhost');
define( 'DB_USER', 'root');
define( 'DB_PASSWORD', 'root');
define( 'DB_DATABASE', 'assignment' );
define( 'DB_PORT', '8889' );

function add_product ( $sku, $name, $type, $price ) {
    
    $database = mysqli_connect( DB_HOST,DB_USER,DB_PASSWORD,DB_DATABASE,DB_PORT );
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