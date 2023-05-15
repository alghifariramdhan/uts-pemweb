<?php
include_once "../database.php";
$id = $_GET['id'];
$order_delete = $pdo->prepare("DELETE FROM `order` WHERE id =?");
$order_delete->execute([$id]);
header("Location: dashboard.php?url=order/order");
