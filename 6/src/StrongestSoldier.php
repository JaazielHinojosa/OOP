<?php

namespace Styde;

class StrongestSoldier extends Unit
{
    protected $damage = 40;

    public function attack (Unit $opponent)
    {
        show("{$this->name} dispara plasma a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }
    public function takedamage($damage)
    {
        return parent::takeDamage($damage / 4);
    }
}
