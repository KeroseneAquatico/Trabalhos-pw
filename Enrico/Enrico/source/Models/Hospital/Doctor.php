<?php

namespace source\Models\Hospital;

use source\Models\User;

class Doctor extends User 
{

    private $crm;
    private $specialty;

    public function __construct( $id,$name,$email,string $crm = null, string $specialty = null)
    {
        parent::__construct($id, $name, $email);
        $this->crm = $crm;
        $this->specialty = $specialty;
    }
     public function getCrm(): ?string
    {
        return $this->Crm;
    }

    public function setCrm(string $crm = null): void
    {
        $this->crm = $crm;
    }
 public function getSpecialty(): ?string
    {
        return $this->specialty;
    }

    public function setSpecialty(string $specialty = null): void
    {
        $this->specialty = $specialty;
    }


  public function show(): void
   {
        echo "Médico: #{$this->id} - Nome: {$this->name}<br>
         Email: {$this->email}<br>
         CRM: {$this->crm}<br>
         Especialidade {$this->specialty}<br>
         ";
    }


}