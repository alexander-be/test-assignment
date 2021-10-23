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
        <button type="submit" form="form" id="delete-product-btn">MASS DELETE</button>
    </div>
</header>

<form action="" method="get" id="form">
    <ul class="product_list">
        <?php foreach ( $products as $product ) : ?>
            <li class="product_item" id="product_item" value="<?php echo $product['id']; ?>">
                <input type="checkbox" name="check[]" class="delete-checkbox">
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
            </li>
        <?php endforeach; ?>
    </ul>
</form>    
    <?php require 'templates/footer.php';?>