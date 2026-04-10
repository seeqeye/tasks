<?php

declare(strict_types=1);

require __DIR__ . '/vendor/autoload.php';

use Seeqeye\Lw4\Cart;
use Seeqeye\Lw4\RateLimiter;

$cart = new Cart();
$cart->addProduct('Apple', 100.0);
$cart->addProduct('Apple', 100.0);
$cart->addProduct('Milk', 80.5);
$cart->applyDiscount(10.0);

echo 'Cart total: ' . $cart->getTotal() . PHP_EOL;

$rateLimiter = new RateLimiter(3, 10);

var_dump($rateLimiter->allow());
var_dump($rateLimiter->allow());
var_dump($rateLimiter->allow());
var_dump($rateLimiter->allow());

//print_r($cart);
    