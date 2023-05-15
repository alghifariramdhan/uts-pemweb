<?php
include_once "../database.php";
$id = $_GET['id'];
$product_delete = $pdo->prepare("DELETE FROM product WHERE id =?");
$product_delete->execute([$id]);
header("Location: dashboard.php?url=product/product");
