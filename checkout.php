<?php include_once 'templates/header.php' ?>
<?php if (isset($_POST["checkout"])) {
    $order_number = $_POST["order_number"];
    $customer_id = $_POST["customer_id"];
    $product_id = $_POST["product_id"];
    $qty = $_POST["qty"];
    $price = $pdo->query("SELECT sell_price FROM product WHERE id = $product_id")->fetch(PDO::FETCH_ASSOC);
    $total_price = $price["sell_price"] * $qty;
    $date = date("Y-m-d H:i:s");
    $order_insert = $pdo->prepare("INSERT INTO `order` (order_number, customer_id, product_id, qty, total_price, date) VALUES (?,?,?,?,?,?)");
    $order_insert->execute([$order_number, $customer_id, $product_id, $qty, $total_price, $date]);
    header("Location: index.php");
}
?>
<div class="row-cols-md-2">
    <div class="container mb-5">
        <div class="container-fluid px-5 py-2">
            <h2 class="py-4 text-center">Checkout</h2>
            <form method="POST" class="checkout-form">
                <div class="row gy-4 text-light">
                    <div class="col-md-12">
                        <label for="order_number" class="form-label">Order Number</label>
                        <input type="text" class="form-control" name="order_number" id="order_number" placeholder="Order Number">
                    </div>
                    <div class="col-md-12">
                        <label for="customer" class="form-label">Customer</label>
                        <select class="form-select" name="customer_id" id="customer" required>
                            <option value="">Select Customer</option>
                            <?php foreach ($listCustomer as $c) : ?>
                                <option value="<?= $c['id']; ?>"><?= $c['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12">
                        <label for="product" class="form-label">Product</label>
                        <select class="form-select" name="product_id" id="product" required>
                            <option value="">Select Product</option>
                            <?php foreach ($listProduct as $p) : ?>
                                <option value="<?= $p['id']; ?>"><?= $p['name']; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="col-md-12 ">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" class="form-control" name="qty" id="quantity" placeholder="Quantity" min="0" required>
                    </div>
                    <div class="col-md-12 text-center">
                        <button class="btn btn-outline-light btn-lg" name="checkout" type="submit">Checkout</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include_once 'templates/footer.php' ?>