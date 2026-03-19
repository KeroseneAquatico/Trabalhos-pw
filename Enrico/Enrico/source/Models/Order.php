<?php

namespace source\Models;

class Order {

    private $id;
    private $customerName;
    private $total;

    public function __construct(int $id = null, string $customerName = null, float $total = null) {
        $this->id = $id;
        $this->customerName = $customerName;
        $this->total = $total;
    }

    public function getId(): ?int {
        return $this->id;
    }

    public function setId(int $id): void {
        $this->id = $id;
    }

    public function getName(): ?string {
        return $this->customerName;
    }

    public function setName(string $customerName): void {
        $this->customerName = $customerName;
    }

    public function getTotal(): ?int {
        return $this->total;
    }

    public function setTotal(float $total): void {
        $this->total = $total;
    }

    public function addFee(float $fee = null): void {
        $this->total += $this->total * ($fee/100);
    }

    public function show(): void {
        echo "<br>" . "Pedido: {$this->id} - Cliente: {$this->customerName} - Total: R$ " . number_format($this->total, 2, ".", ",");
    }

}
