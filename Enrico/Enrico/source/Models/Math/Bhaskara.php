<?php


namespace source\Models\Math;


class Bhaskara
{
    private $a;
    private $b;
    private $c;
    private $discriminant;
    private $root1;
    private $root2;

    public function __construct(float $a = null,float $b = null,float $c = null,)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;

    }
   public function getA(): ?float
    {
        return $this->a;
    }

    public function setA(float $a = null): void
    {
        $this->a = $a;
    }  
     public function getB(): ?float
    {
        return $this->b;
    }

    public function setB(float $b = null): void
    {
        $this->b = $b;
    }  
     public function getC(): ?float
    {
        return $this->c;
    }

    public function setC(float $c = null): void
    {
        $this->c = $c;
    }

    public function calculate()
    {
        $this->discriminant = pow($this->b, 2) - 4*$this->a*$this->c;
        if($this->discriminant>0)
            {
            $this->root1 = (-$this->b - sqrt($this->discriminant) )/2*$this->a;
            $this->root2 = (-$this->b + sqrt($this->discriminant) )/2*$this->a;
        }
        elseif ($this->discriminant==0)
            {
                $this->root1=(-$this->b - sqrt($this->discriminant) )/2*$this->a;
                $this->root2= $root1;
        }
        else
        {
            $this->root1=null;
            $this->root2=null;
        }
    }
    public function show()
    {
     echo "  
Fórmula de Báskara (Bhaskara's Formula) <br>
Coeficiente a (Coefficient a): {$this->a}<br>
Coeficiente b (Coefficient b): {$this->b}<br>
Coeficiente c (Coefficient c): {$this->c}<br>
Discriminante (Discriminant) Δ: {$this->discriminant}<br>
Raiz 1 (Root 1) x₁: {$this->root1}<br>
Raiz 2 (Root 2) x₂: {$this->root2}<br>";
    }




}


