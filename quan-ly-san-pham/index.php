<?php
include_once "Models/Product.php";
include_once "Services/ProductManager.php";

use Services\ProductManager;
use Models\Product;

$productManager = new ProductManager();
$productManager->add(new Product('magic keyboard', 2000000));
$productManager->add(new Product('iPhone 8', 8000000));

$products = $productManager->getProducts();
foreach ($products as $product) {
    echo $product->getName() . "<br>";
    echo number_format($product->getPrice(), 0, '', ',') . "<br>";
}


