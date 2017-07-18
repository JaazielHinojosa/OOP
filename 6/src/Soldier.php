<?php

namespace Styde;

class Soldier extends Unit
{
    protected $damage = 20;

    public function attack(Unit $opponent)
    {
        show("{$this->name} ataca con la espada a {$opponent->getName()}");
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 2);
    }
}
