<?php 
    
    require '../Private/init.php';
    require 'templates/header.php';

    $result = mysqli_query( $database, "SELECT * FROM products");
    $products = mysqli_fetch_all( $result, MYSQLI_ASSOC);
?> 

    <header>
        <h2>Product List</h2>
        <div class="btn">
            <a href="add-product.php"><button id="add-product-btn">ADD</button></a>
            <a href=""><button id="delete-product-btn">MASS DELETE</button></a>
        </div>
    </header>

    <ul class="product_list">
        <?php foreach ( $products as $product ) : ?>
            <li class="product_item" id="product_item">
                <input type="checkbox" name="checkbox[]" class="delete-checkbox">
                <div class="product_item_content">
                    <?php if ( $product['type'] === 'disc' ) : ?>
                        <span id="sku"><?php echo $product['sku']; ?></span>
                        <span id="name"><?php echo $product['name']; ?></span>
                        <span id="price"><?php echo $product['price'] . ' $'; ?></span>
                        <span id="size"><?php echo 'Size: ' . $product['size'] . ' MB'; ?></span>
                    <?php endif; ?>
                    <?php if ( $product['type'] === 'book' ) : ?>
                        <span id="sku"><?php echo $product['sku']; ?></span>
                        <span id="name"><?php echo $product['name']; ?></span>
                        <span id="price"><?php echo $product['price'] . ' $'; ?></span>
                        <span id="size"><?php echo 'Weight: ' . $product['weight'] . 'KG'; ?></span>
                    <?php endif; ?>
                    <?php if ( $product['type'] === 'furniture' ) : ?>
                        <span id="sku"><?php echo $product['sku']; ?></span>
                        <span id="name"><?php echo $product['name']; ?></span>
                        <span id="price"><?php echo $product['price'] . ' $'; ?></span>
                        <span id="size"><?php echo 'Dimensions: ' . $product['height'] . 'x' . $product['width'] . 'x' . $product['length'];?></span>
                    <?php endif; ?>
                </div>
        <?php endforeach; ?>
            </li>
    </ul>

    <?php require 'templates/footer.php';?>