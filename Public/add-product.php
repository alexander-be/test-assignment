<?php
require 'templates/header.php';
require '../Private/init.php';
require '../src/Database.php';
require '../src/AbstractProduct.php';
require '../src/Book.php';
require '../src/Disc.php';
require '../src/Furniture.php';

$type = '';


if ( isset( $_POST['add-product'] ) ) {
    $type = ucfirst($_POST['type']);
    
    $product = new $type;
    $product->setSku($_POST['sku']);
    $product->setName($_POST['name']);
    $product->setPrice($_POST['price']);
    $product->setType($type);
    $product->setSize($_POST['size']);
    $product->setWeight($_POST['weight']);
    $product->setHeight($_POST['height']);
    $product->setWidth($_POST['width']);
    $product->setLength($_POST['length']);
    header('Location:http://localhost:8888/SCANDIWEB/Public/');
    return (new Database())->addProduct($product);
}

?>

<header>
    <h2>Product List</h2>
    <div class="btn">
        <input type="submit" name="add-product" form="product-form" value="SAVE">
        <a href="index.php"><button id="delete-btn">CANCEL</button></a>
    </div>
</header>
<!-- 
<?php if ( $error ): ?>
    <div class="error">
        Please fill required fields.
    </div>
<?php endif; ?>

<?php if ( $errorType ): ?>
    <div class="error">
        Please select type.
    </div>
<?php endif; ?> -->

<form action="" method="post" id="product-form">
    <div class="product">
        <span>
            <label for="sku">SKU</label>
            <input type="text" name="sku" id="sku" value="">
        </span>
        <span>   
            <label for="name">Name</label>
            <input type="text" name="name" id="name" value="">
        </span>
        <span>
            <label for="price">Price ($)</label>
            <input type="text" name="price" id="price" value="">
        </span>
    </div>
    <div class="product_type">
        <label for="type">Type switcher</label>
        <select name="type" id="productType" onchange="selectType()">
            <option value="">Select type</option>
            <option value="disc">Disc</option>
            <option value="book">Book</option>
            <option value="furniture">Furniture</option>
        </select>
    </div>

    <div class="product_disc hidden">
        <label for="size">Size (MB)</label>
        <input type="text" name="size" id="size" value=""><br>
        <p><strong>Please provide capacity of the item in megabytes</strong></p>
    </div>

    <div class="product_book hidden">
        <label for="weight">Weight (KG)</label>
        <input type="text" name="weight" id="weight" value=""><br>
        <p><strong>Please provide weight of the item in kilograms</strong></p>
    </div>

    <div class="product_furniture hidden">
        <label for="height">Height (CM)</label>
        <input type="text" name="height" id="height" value="">
        <label for="width">Width (CM)</label>
        <input type="text" name="width" id="width" value="">
        <label for="length">Length (CM)</label>
        <input type="text" name="length" id="length" value="">
        <p><strong>Please provide dimensions in HxWxL</strong></p>
    </div>
</form>

<?php require 'templates/footer.php'; ?>
