<?php 

namespace source\Models\Zoo;
use source\Models\Zoo\Animal;

class Bird extends Animal
{

    private ?float $wingspan;
    private ?bool $canFly;

    public function __construct($id=null, $name=null, $species=null, $habitat=null, $weight=null, $age=null, $wingspan=null, $canFly=false)
    {
        parent::__construct($id, $name, $species, $habitat, $weight, $age);
        $this->wingspan = $wingspan;
        $this->canFly = $canFly;
    }
public function getCanFly(): ?bool
    {
        return $this->canFly;
    }

    public function setCanFly(?bool $canFly): void
    {
        $this->canFly = $canFly;
    }

    public function getWingspan(): ?float
    {
        return $this->wingspan;
    }

    public function setWingspan(?float $wingspan): void
    {
        $this->wingspan = $wingspan;
    }


    public function sing(): void
    {
        echo "{$this->getName()} está cantando.";
    }
    public function fly(): void
    {
        if($this->canFly == true)
        {
            echo "{$this->getName()} está voando.";
        }
        else
        {
            echo "{$this->getName()} não consegue voar!";
        }

    }

    public function show(): void
    {        
    if($this->canFly==true)
    {
        $mostrar="Sim";
    }else{
        $mostrar="Não";
    }

        echo "Ave (Bird): {$this->getId()} - {$this->getName()}<br>
Espécie (Species): {$this->getSpecies()}<br>
Habitat: {$this->getHabitat()}<br>
Peso (Weight): {$this->getWeight()} kg<br>
Idade (Age): {$this->getAge()} anos<br>
Envergadura (wingspan): {$this->wingspan} <br>
Voa (Can Fly): {$mostrar}<br><br>";
    }


}

