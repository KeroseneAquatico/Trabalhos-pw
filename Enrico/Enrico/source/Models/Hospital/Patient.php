<?php

namespace source\Models\Hospital;

use source\Models\User;

class Patient extends User 
{
    
private $birthDate;
private $medicalRecord;

public function __construct($id,$name,$email,string $birthDate = null, string $medicalRecord = null){
parent::__construct($id, $name, $email);
$this->birthDate = $birthDate;
$this->medicalRecord = $medicalRecord;
}

public function setBirthDate(string $birthDate): void{
$this->birthDate = $birthDate;
}
public function getBirthDate(): ?string{
   return $this->birthDate;
}

public function setMedicalRecord(string $medicalRecord): void{
$this->medicalRecord = $medicalRecord;
}

public function getMedicalRecord(): ?string{
return    $this->medicalRecord;
}

public function show(): void{

echo "Paciente {$this->id} - Nome: {$this->name}<br>
Email: {$this->email}<br>
Data de Nascimento: {$this->birthDate}<br>
Prontuário: {$this->medicalRecord}<br>";
}
}