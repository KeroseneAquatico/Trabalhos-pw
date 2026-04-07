<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Zoo\Animal;
use source\Models\Zoo\Mammal;
use source\Models\Zoo\Bird;
use source\Models\Zoo\Reptile;


$Mamifero1 = new Mammal(1,"Ronaldo","Panthera Leo", "Savanna", 190.00 , 6, "Dourado", 110);

$Mamifero1->eat();
$Mamifero1->sleep();

$Mamifero1->show();
$Mamifero1->breastfeeding();

$Ave1 = new Bird(2,"Judite","Angry Bird", "Florestas", 10.00,8,40.00,true);

$Ave1->Fly();
$Ave1->show();

$Reptil = new Reptile(3,"Pedro","Crocodilo","Pantano",300.00,35,false,"Lisas");

$Reptil->show();