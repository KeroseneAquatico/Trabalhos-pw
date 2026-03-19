<?php

namespace source\Models\Math;

class PythagoreanTheorem
{
private $cathetusA;
private $cathetusB;
private $hypotenuse;

public function __construct(float $cathetusA = null, float $cathetusB = null){
$this->cathetusA = $cathetusA;
$this->cathetusB = $cathetusB;
}

public function setCathetusA(float $cathetusA):void{
$this->cathetusA = $cathetusA;
}

public function getCathetusA(): ?float{
return $this->cathetusA;
}

public function setCathetusB(float $cathetusB): void{
$this->cathetusA = $cathetusA;
}

public function getCathetusB(): ?float{
return $this->cathetusB = $cathetusB;
}

public function setHypotenuse(string $hypotenuse):void{
$this->hypotenuse = $hypotenuse;
}

public function getHypotenuse(): ?float{
return $this->hypotenuse;
}

public function calculate(): void{
$this->hypotenuse = sqrt(pow($this->cathetusA, 2) + pow($this->cathetusB, 2));
}
public function show():void
{
echo "Teorema de Pitágoras (Pythagorean Theorem)<br>
Cateto a (Cathetus a): {$this->cathetusA}<br>
Cateto b (Cathetus b): {$this->cathetusB}<br>
Hipotenusa (Hypotenuse): {$this->hypotenuse}<br>";
}
}