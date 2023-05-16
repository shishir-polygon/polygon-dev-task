<?php
use App\User;
use App\Product;
use App\Name;

require 'Product.php';
require 'Cart.php';
require 'User.php';
require 'Name.php';
$firstName = $_GET['firstName'] ?? 'TR';
$lastName = $_GET['lastName'] ?? 'Shishir';

try {
    $products = [
        new Product('Product A', 10.00),
        new Product('Product B', 20.00),
        new Product('Product C', 30.00),
    ];
    $user = new User( new Name($firstName, $lastName) );

    foreach ($products as $product) {
        $user->getCart()->addProduct($product);
    }

    $user->getCart()->removeProduct($products[0]);

    $total = $user->getCart()->getTotal();

    echo $user->getName() . ' have to pay Total: $' . number_format($total, 2) . PHP_EOL;
}catch (TypeError $e){
    echo 'Error: ' . $e->getMessage();
}
