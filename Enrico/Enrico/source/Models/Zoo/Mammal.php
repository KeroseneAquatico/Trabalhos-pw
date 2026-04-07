<?php

namespace source\Models\Zoo;
use source\Models\Zoo\Animal;

class Mammal extends Animal
{

    private ?string $furColor;
    private ?int $gestationPeriod;

    public function __construct(?int $id=null, $name=null, $species=null, $habitat=null, $weight=null, $age=null, $furColor=null,$gestationPeriod=null)
    {
        parent::__construct($id, $name, $species, $habitat, $weight, $age);

        $this->furColor = $furColor;
        $this->gestationPeriod = $gestationPeriod;
    }

      public function getFurColor(): ?string
    {
        return $this->furColor;
    }

    public function setFurColor(?string $furColor): void
    {
        $this->furColor = $furColor;
    }
  public function getGestationPeriod(): ?int
    {
        return $this->gestationPeriod;
    }

    public function setGestationPeriod(?int $gestationPeriod): void
    {
        $this->gestationPeriod = $gestationPeriod;
    }

    public function breastfeeding(): void
    {
        echo "{$this->getName()} está amamentando seus filhotes.";
    }

    public function show(): void 
    {
       echo "Mamífero (Mammal): {$this->getId()} - {$this->getName()}<br>
Espécie (Species): {$this->getSpecies()}<br>
Habitat: {$this->getHabitat()}<br>
Peso (Weight): {$this->getWeight()} kg<br> 
Idade (Age): {$this->getAge()} anos<br>
Cor do Pelo (Fur Color): {$this->furColor}<br>
Período de Gestação (Gestation Period): {$this->gestationPeriod} dias <br><br>";
    }


}