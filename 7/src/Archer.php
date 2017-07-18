<?php

namespace Styde;

class Archer extends Unit
{
    protected $damage = 10;

    public function attack(Unit $opponent)
    {
        show(
            "{$this->name} dispara una flecha a {$opponent->getName()}"
        );
        $opponent->takeDamage($this->damage);
    }

    public function takeDamage($damage)
    {
        if (rand(0, 1)==1) {
            return parent::takeDamage($damage);
        }
    }
}
