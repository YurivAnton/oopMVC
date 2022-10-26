<?php
require_once 'Classes/Cart.php';
require_once 'Classes/Product.php';

$cart = new Cart();
$cart->add(new Product('name1', 1, 10));
$cart->add(new Product('name2', 2, 20));

echo $cart->getTotalCost();
//var_dump($cart->products);
//echo $cart->remove('name1');
echo '<br>';
//var_dump($cart->products);
echo $cart->getTotalQuantity();
echo '<br>';
echo $cart->getAvgPrice();
