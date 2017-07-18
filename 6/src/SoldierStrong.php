<?php

namespace Styde;

class SoldierStrong extends Unit
{
    protected $damage = 30;

    public function attack(Unit $opponent)
    {
        show("{$this->name} dispara lacer a {$opponent->getName()}" );
        $opponent->takeDamage($this->damage);
    }
    public function takeDamage($damage)
    {
        return parent::takeDamage($damage / 3);
    }
}
