<?php
$host = 'localhost';
$pass = '';
$user = 'root';
$db = 'dblearningtools';

$pdo = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$listProduct = $pdo->query("SELECT * FROM product")->fetchAll(PDO::FETCH_ASSOC);
$listCustomer = $pdo->query("SELECT customer.*,card.name as card_name FROM customer INNER JOIN card ON customer.card_id = card.id")->fetchAll(PDO::FETCH_ASSOC);
$listOrder = $pdo->query("SELECT `order`.* , customer.name AS customer_name, product.name as product FROM `order` INNER JOIN customer ON `order`.customer_id = customer.id INNER JOIN product ON `order`.product_id = product.id")->fetchAll(PDO::FETCH_ASSOC);
$listProductType = $pdo->query("SELECT * FROM product_type")->fetchAll(PDO::FETCH_ASSOC);
