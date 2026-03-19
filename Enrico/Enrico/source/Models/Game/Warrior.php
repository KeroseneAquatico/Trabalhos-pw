<?php

namespace source\Models\Game;

use source\Models\Game\Character;

class Warrior extends Character
{

    private $defense;

        public function __construct($name,$life,$mana,$strength, float $defense = null)
    {
        parent::__construct($name,$life,$mana,$strength);
        $this->defense = $defense;
    }
    
        public function describe():void
    {
        echo 
        "
        Nome: {$this->name}<br>
        Vida: {$this->life}<br>
        Mana: {$this->mana}<br>
        Força: {$this->strength}<br>
        Defesa: {$this->defense}<br>
        ";

    }

}