<?php


namespace source\Models\Game;

class Character
{
protected $name;
protected $life;
protected $mana;
protected $strength;

public function __construct(string $name = null, float $life = null, float $mana = null, float $strength = null ){
$this->name = $name;
$this->life = $life;
$this->mana = $mana;
$this->strength = $strength;
}

public function setName(string $name): void{
$this->name = $name;
}

public function getName(): ?string{
return $this->name;
}

public function setLife(string $life):void{
$this->life = $life;
}

public function getLife():?string{
return $this->life;
}

public function setMana(float $mana): void{
$this->mana = $mana;
}

public function getMana(): ?float{
return $this->mana;
}

public function setStrength(float $strength): void{
$this->strength = $strength;
}

public function getStrength(): ?float{
return $this->strength;
}

public function describe():void{
echo "Personagem:

Name:{$this->name}
Life: {$this->life}
Mana: {$this->mana}
Strength: {$this->strength}";
}


}