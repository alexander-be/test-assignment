<?php

require '../Private/init.php';
require '../src/ProductExtractor.php';

$result = mysqli_query($database, "SELECT * FROM products");
$result = mysqli_fetch_all($result, MYSQLI_ASSOC);
$products = [];
$extractor = new ProductExtractor();
foreach ($result as $item) {
    $products[] = $extractor->create($item);
}

if (isset($_POST['check'])) {
    $checkedItems = $_POST['check'];
    foreach ($checkedItems as $checkedIdList) {
        $deleteItems = "DELETE from products WHERE id=" . $checkedIdList;
        mysqli_query($database, $deleteItems);
    }
    header('Location:' . SITE_URL);
    exit();
}

require 'templates/header.php';
?>

<header>
    <h2>Product List</h2>
    <div class="btn">
        <a href="add-product.php"><button id="add-product-btn">ADD</button></a>
        <button type="submit" form="form" id="delete-product-btn">MASS DELETE</button>
    </div>
</header>

<form action="" method="post" id="form">
    <ul class="product_list">
        <?php foreach ($products as $product) : ?>
            <li class="product_item" id="product_item">
                <input type="checkbox" name="check[]" class="delete-checkbox" value="<?php echo $product->getId(); ?>">
                <div class="product_item_content">
                    <span id="sku"><?php echo $product->getSku(); ?></span>
                    <span id="name"><?php echo $product->getName(); ?></span>
                    <span id="price"><?php echo $product->getPrice() . ' $'; ?></span>
                    <?php echo $product->showUniqueValues() ?>
                </div>
            </li>
        <?php endforeach; ?>
    </ul>
</form>
<?php require 'templates/footer.php'; ?>