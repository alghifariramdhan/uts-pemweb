<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Product Type
        </div>
        <a href="dashboard.php?url=product_type/product_type_add" class="btn btn-primary btn-md">Add Product Type</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listProductType as $pt) : ?>
                    <tr>
                        <td><?= $pt["id"]; ?></td>
                        <td><?= $pt["name"]; ?></td>
                        <td>
                            <a href="dashboard.php?url=product_type/product_type_edit&id=<?= $pt['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="dashboard.php?url=product_type/product_type_delete&id=<?= $pt['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>