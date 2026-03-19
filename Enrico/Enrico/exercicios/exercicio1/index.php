<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Product;

$product = new Product(1, "notebook", 4000);

$product->discount(10);

$product->show();
