<?php

namespace source\Models\Game;

use source\Models\Game\Character;

class Thief extends Character
{

    private $agility;

        public function __construct($name,$life,$mana,$strength, float $agility = null)
    {
        parent::__construct($name,$life,$mana,$strength);
        $this->agility = $agility;
    }

    public function describe():void
    {
        echo 
        "
        Nome: {$this->name}<br>
        Vida: {$this->life}<br>
        Mana: {$this->mana}<br>
        Força: {$this->strength}<br>
        Agilidade: {$this->agility}<br>
        ";

    }

}