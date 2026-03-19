<?php

require __DIR__ . "/../../source/autoload.php";

use source\Models\Hospital\Patient;
use source\Models\Hospital\Doctor;


$paciente1 = new Patient(1,"Ronaldo","ronaldo@gmail","01.01.2010","Nada"); 
$paciente2 = new Patient(2,"Pedro","pedro@gmail","01.01.2010","Nada"); 
$doutor1 = new Doctor(3,"Lucas","lucas@gmail","123456","Cardiologista"); 
$doutor2 = new Doctor(4,"Marcos","marcos@gmail","123456","Optometrista"); 
// var_dump($paciente1);
// $paciente1->show();
$paciente1->show();
$paciente2->show();
$doutor1->show();
$doutor2->show();