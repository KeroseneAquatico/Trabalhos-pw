<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Math\PythagoreanTheorem;
use source\Models\Math\Bhaskara;

$Pytha1 = new PythagoreanTheorem(3,4);
$Pytha1->calculate();
$Pytha1->show();
$Bhask1 = new Bhaskara(2,3,4);
$Bhask1->calculate();
$Bhask1->show();
$Pytha2 = new PythagoreanTheorem(6,7);
$Pytha2->calculate();
$Pytha2->show();
$Bhask2 = new Bhaskara(1,9,1);
$Bhask2->calculate();
$Bhask2->show();