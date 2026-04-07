<?php

namespace source\Models\Zoo;

abstract class Animal
{

    private ?int $id;
    private ?string $name;
    private ?string $species;
    private ?string $habitat;
    private ?float $weight;
    private ?int $age;


    public function __construct(?int $id = null, $name=null, $species=null, $habitat=null, $weight=null, $age=null)
    {
        
        $this->id=$id;
        $this->name=$name;
        $this->species=$species;
        $this->habitat=$habitat;
        $this->weight=$weight;
        $this->age=$age;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(?int $id): void
    {
        $this->id = $id;
    }

     public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): void
    {
        $this->name = $name;
    }
        public function getSpecies(): ?string
    {
        return $this->species;
    }

    public function setSpecies(?string $species): void
    {
        $this->species = $species;
    }
        public function getHabitat(): ?string
    {
        return $this->habitat;
    }

    public function setHabitat(?string $habitat): void
    {
        $this->habitat = $habitat;
    }

        public function getWeight(): ?float
    {
        return $this->weight;
    }

    public function setWeight(?float $weight): void
    {
        $this->weight = $weight;
    }
        public function getAge(): ?int
    {
        return $this->age;
    }

    public function setAge(?int $age): void
    {
        $this->age = $age;
    }


    public function eat(): void
    {
        echo "{$this->name} está comendo.";
    }


    public function sleep(): void
    {
        echo "{$this->name} está dormindo.";
    }


    public function show(): void
    {
        echo "Animal: {$this->id} - {$this->name}<br> ";
        echo "Espécie (Species): {$this->species} <br> ";
        echo "Habitat: {$this->habitat}<br> ";
        echo "Peso: {$this->weight}<br> ";
        echo "Idade: {$this->age}<br> ";
    }

};
