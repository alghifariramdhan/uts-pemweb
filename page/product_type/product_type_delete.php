<?php
include_once "../database.php";
$id = $_GET['id'];
$product_type_delete = $pdo->prepare("DELETE FROM product_type WHERE id =?");
$product_type_delete->execute([$id]);
header("Location: dashboard.php?url=product_type/product_type");
