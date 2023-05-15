<?php include_once 'templates/header.php' ?>
<?php
$product_id = $_GET['id'];
$product = $pdo->query("SELECT product.*, product_type.name as category FROM product JOIN product_type ON product.product_type_id = product_type.id WHERE product.id = $product_id")->fetch(PDO::FETCH_ASSOC);
?>

<div class="gaming-library">
    <div class="col-lg-12">
        <div class="heading-section">
            <h4><em>Products Detail</em> - <?= $product["name"]; ?></h4>
        </div>
        <div class="item">
            <ul>
                <li><img src="assets/images/game-01.jpg" alt="" class="templatemo-item"></li>
                <li>
                    <h4>Name</h4><span><?= $product["name"]; ?></span>
                </li>
                <li>
                    <h4>Price</h4><span><?= $product["sell_price"]; ?></span>
                </li>
                <li>
                    <h4>Stock</h4><span><?= $product["stock"]; ?></span>
                </li>
                <li>
                    <h4>Category</h4><span><?= $product["category"]; ?></span>
                </li>
                <li>
                    <div class="main-border-button border-no-active"><a href="index.php">Back</a></div>
                </li>
            </ul>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-button">
            <a href="checkout.php">Buy Product</a>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php' ?>