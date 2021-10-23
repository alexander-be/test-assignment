<?php
require 'templates/header.php'; 
require 'functions.php';


if ( isset( $_POST['add-product'] ) ) {

    $sku = $_POST['sku'];
    $name = $_POST['name'];
    $type = $_POST['type'];
    $price = $_POST['price'];
    
    return add_product( $sku, $name, $type, $price);
}
?>




<form action="" method="post">
    <header>
        <h2>Product List</h2>
        <div class="btn">
            <input type="submit" name="add-product" value="SAVE">
            <a href="index.php"><button id="delete-btn">CANCEL</button></a>
        </div>
    </header>
    
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

    <div class="product_dvd hidden">
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
