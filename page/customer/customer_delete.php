<?php
include_once "../database.php";
$id = $_GET['id'];
$customer_delete = $pdo->prepare("DELETE FROM customer WHERE id =?");
$customer_delete->execute([$id]);
header("Location: dashboard.php?url=customer/customer");
