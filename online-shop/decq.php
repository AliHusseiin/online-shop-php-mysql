<?php
define('BASE_PATH', './');
require_once('./logic/products.php');
require_once('./logic/cart.php');
$cart = getCart();
if (isset($_GET['id'])) {
    $product = getProductById($_GET['id']);
    if ($product) {
        decQun($product);
    }
}
header('Location:cart.php');
?>