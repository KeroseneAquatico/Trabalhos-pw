<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Game\Warrior;
use source\Models\Game\Thief;
use source\Models\Game\Wizard;

$warrior = new Warrior("Cauã",300,70,10000,10);
$warrior->describe();
$Thief1= new Thief("José",300,60,10,500);
$Thief1->describe();
$wizard = new Wizard("Caetano",300,10000,20,1000);
$wizard->describe();