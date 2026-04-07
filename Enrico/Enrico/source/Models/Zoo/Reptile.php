<?php

namespace source\Models\Zoo;
use source\Models\Zoo\Animal;

class Reptile extends Animal
{

    private ?bool $isVenomous;
    private ?string $scaleType;

    public function __construct ($id=null, $name=null, $species=null, $habitat=null, $weight=null, $age=null, $isVenomous=false, $scaleType=null)
    {  
        parent::__construct($id, $name, $species, $habitat, $weight, $age);
        $this->isVenomous = $isVenomous;
        $this->scaleType = $scaleType;
    }
   public function getScaleType(): ?string
    {
        return $this->scaleType;
    }

    public function setScaleType(?string $scaleType): void
    {
        $this->scaleType = $scaleType;
    }
  public function getIsVenomous(): ?bool
    {
        return $this->isVenomous;
    }

    public function setIsVenomous(?bool $isVenomous): void
    {
        $this->isVenomous = $isVenomous;
    }


    public function shed(): void
    {
        echo "{$this->name} está trocando de pele.";
    }

    public function show(): void
    {        
    if($this->isVenomous==true)
    {
        $mostrar="Sim";
    }else{
        $mostrar="Não";
    }

        echo "Réptil (Reptile): {$this->getId()} - {$this->getName()}<br>
Espécie (Species): {$this->getSpecies()}<br>
Habitat: {$this->getHabitat()}<br>
Peso (Weight): {$this->getWeight()} kg<br>
Idade (Age): {$this->getAge()} anos<br>
Venenoso (Venomous): {$mostrar}<br>
Tipo de Escamas (Scale Type): {$this->scaleType} <br><br>";
    }



}
