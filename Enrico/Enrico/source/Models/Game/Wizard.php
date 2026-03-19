<?php

namespace source\Models\Game;

use source\Models\Game\Character;

class Wizard extends Character
{

    private $intelligence;

        public function __construct($name,$life,$mana,$strength, float $intelligence = null)
    {
        parent::__construct($name,$life,$mana,$strength);
        $this->intelligence = $intelligence;
    }
    




    public function describe():void
    {
        echo 
        "
        Nome: {$this->name}<br>
        Vida: {$this->life}<br>
        Mana: {$this->mana}<br>
        Força: {$this->strength}<br>
        Inteligencia: {$this->intelligence}<br>
        ";

    }

}