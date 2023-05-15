<div class="card mb-4">
    <div class="card-header d-flex justify-content-between align-items-center">
        <div class="">
            <i class="fas fa-table me-1"></i>
            Data Customer
        </div>
        <a href="dashboard.php?url=customer/customer_add" class="btn btn-primary btn-md">Add Customer</a>
    </div>
    <div class="card-body">
        <table id="datatablesSimple">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Card</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($listCustomer as $cust) : ?>
                    <tr>
                        <td><?= $cust["name"]; ?></td>
                        <td><?= $cust["gender"]; ?></td>
                        <td><?= $cust["phone"]; ?></td>
                        <td><?= $cust["email"]; ?></td>
                        <td><?= $cust["address"]; ?></td>
                        <td><?= $cust["card_name"]; ?></td>
                        <td>
                            <a href="dashboard.php?url=customer/customer_edit&id=<?= $cust['id']; ?>" class="btn btn-warning">Edit</a>
                            <a href="dashboard.php?url=customer/customer_delete&id=<?= $cust['id']; ?>" class="btn btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
</div>
</main>