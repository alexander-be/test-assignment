<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Scandiweb Test Assignment</title>
</head>
<body>
    <header>
        <h2>Product List</h2>
        <div class="btn">
            <a href=""><button id="add-product-btn">ADD</button></a>
            <a href=""><button id="delete-product-btn">MASS DELETE</button></a>
        </div>
    </header>
    <ul class="product_list">
        <?php for($i = 1; $i<= 12; $i++) {
            echo 
            '<li class="product_item">
            <input type="checkbox" class="delete-checkbox">
            <p class="product_item_content">
                SKU <br/>
                NAME <br/>
                PRICE<br/>
                SPECS
            </p>
            </li>'
        ; } ?>
        

    </ul>
    <footer>
        Scandiweb Test assignment
    </footer>
</body>
</html>