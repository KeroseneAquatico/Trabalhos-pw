<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Order;

$order = new Order(1, "nao sei", 10000);

// var_dump($order);

$order->addFee(10);

$order->show();
