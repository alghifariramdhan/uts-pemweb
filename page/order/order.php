<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Order
        </div>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Order Number</th>
                    <th>Date</th>
                    <th>Product</th>
                    <th>Qty</th>
                    <th>Total Price</th>
                    <th>Customer</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listOrder as $o) : ?>
                    <tr>
                        <td><?= $o["id"]; ?></td>
                        <td><?= $o["order_number"]; ?></td>
                        <td><?= $o["date"]; ?></td>
                        <td><?= $o["product"]; ?></td>
                        <td><?= $o["qty"]; ?></td>
                        <td><?= $o["total_price"]; ?></td>
                        <td><?= $o["customer_name"]; ?></td>
                        <td>
                            <a href="dashboard.php?url=order/order_delete&id=<?= $o['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>