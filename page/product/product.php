<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Product
        </div>
        <a href="dashboard.php?url=product/product_add" class="btn btn-primary btn-md">Add Product</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>SKU</th>
                    <th>Name</th>
                    <th>Purchase Price</th>
                    <th>Sell Price</th>
                    <th>Stock</th>
                    <th>Min Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listProduct as $p) : ?>
                    <tr>
                        <td><?= $p["sku"]; ?></td>
                        <td><?= $p["name"]; ?></td>
                        <td><?= $p["purchase_price"]; ?></td>
                        <td><?= $p["sell_price"]; ?></td>
                        <td><?= $p["stock"]; ?></td>
                        <td><?= $p["min_stock"]; ?></td>
                        <td>
                            <a href="dashboard.php?url=product/product_edit&id=<?= $p['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="dashboard.php?url=product/product_delete&id=<?= $p['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>