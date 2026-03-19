<?php

namespace source\Models;

class User
{
    protected $id;
    // private $idType;
    protected $name;
    protected $email;
    // private $password;
    // private $photo;

    public function __construct(int $id = null, string $name = null, string $email = null) {
        $this->id = $id;
        // $this->idType = $idType;
        $this->name = $name;
        $this->email = $email;
        // $this->password = $password;
        // $this->photo = $photo;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setId(int $id = null): void
    {
        $this->id = $id;
    }

    // public function getIdType(): ?int
    // {
    //     return $this->idType;
    // }

    // public function setIdType(int $idType = null): void
    // {
    //     $this->idType = $idType;
    // }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name = null): void
    {
        $this->name = $name;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email = null): void
    {
        $this->email = $email;
    }

    // public function getPassword(): ?string
    // {
    //     return $this->password;
    // }

    // public function setPassword(string $password = null): void
    // {
    //     $this->password = $password;
    // }

    // public function getPhoto(): ?string
    // {
    //     return $this->photo;
    // }

    // public function setPhoto(string $photo = null): void
    // {
    //     $this->photo = $photo;
    // }

}