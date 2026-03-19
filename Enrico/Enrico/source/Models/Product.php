<?php

namespace source\Models;

class Product {
    private $id;
    private $name;
    private $price;

    public function __construct(int $id = null, string $name = null, float $price = null) {

        $this->name = $name;
        $this->id = $id;
        $this->price = $price;

    }

     public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getPrice(): ?float
    {
        return $this->name;
    }

    public function setPrice(float $price): void
    {
        $this->price = $price;
    }

    public function discount(float $discount = null): void {
        $this->price -= $this->price * ($discount/100); 
    }

    public function show(): void {
        echo "Name: {$this->name} Price: R$ " . number_format($this->price, 2, ",", ".");
    }
}