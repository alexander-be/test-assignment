<?php

require '../Private/init.php';
require '../src/Database.php';
require '../src/AbstractProduct.php';
require '../src/Book.php';
require '../src/DVD.php';
require '../src/Furniture.php';
require '../src/Validation.php';


$type = '';
$error = false;

if (isset($_POST['add-product'])) {
    $check = new Validation();
    $check->checkEmpty();
    if ($check->error) {
        $error = true;
    } else {
        $type = $_POST['type'];
        $product = new $type();
        $product->setSku($_POST['sku']);
        $product->setName($_POST['name']);
        $product->setPrice($_POST['price']);
        $product->setType($type);
        $product->setSize($_POST['size']);
        $product->setWeight($_POST['weight']);
        $product->setHeight($_POST['height']);
        $product->setWidth($_POST['width']);
        $product->setLength($_POST['length']);
        $check->checkEmptyUniques($product);
        $check->checkIntegers($product);
        if ($check->errorUniques) {
            $error = true;
        } elseif ($check->errorInt) {
            $error = true;
        }
    }

    if (!$error) {
        header('Location:' . SITE_URL);
        (new Database())->addProduct($product);
    }
}

require 'templates/header.php';
?>

<header>
    <h2>Product List</h2>
    <div class="btn">
        <input type="submit" name="add-product" form="product_form" value="Save">
        <a href="index.php"><button id="delete-btn">Cancel</button></a>
    </div>
</header>

<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post" id="product_form">
    <?php if ($error) {
        echo $check->displayError();
    } ?>

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
            <option value="DVD">Disc</option>
            <option value="Book">Book</option>
            <option value="Furniture">Furniture</option>
        </select>
    </div>

    <div class="product_DVD hidden">
        <label for="size">Size (MB)</label>
        <input type="text" name="size" id="size" value=""><br>
        <p><strong>Please provide capacity of the item in megabytes</strong></p>
    </div>

    <div class="product_Book hidden">
        <label for="weight">Weight (KG)</label>
        <input type="text" name="weight" id="weight" value=""><br>
        <p><strong>Please provide weight of the item in kilograms</strong></p>
    </div>

    <div class="product_Furniture hidden">
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