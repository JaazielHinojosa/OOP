<?php

function show($message)
{
    echo "<p>$message</p>";
}

abstract class Unit {

    protected $hp = 50;
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getHp()
    {
        return $this->hp;
    }

    public function move($direction)
    {
        show("{$this->name} camina hacia $direction");
    }

    abstract public function attack(Unit $opponent);

    public function takeDamage($damage)
    {
        $this->setHp($this->hp - $damage);
        if ($this->hp <= 0) {
            $this->muere();
        }
    }

    public function muere()
    {
        show("{$this->name} muere");
    }

    private function setHp($points)
    {
        $this->hp = $points;
        show("{$this->name} ahora tiene {$this->hp} puntos de vida");
    }
}

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
        if (rand(0, 1)) {
            return parent::takeDamage($damage);
        }
    }
}

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

$ramm = new Soldier('Ramm');

$silence = new Archer('Silence');

$charlie = new SoldierStrong('Charlie');

$ryan = new StrongestSoldier('Ryan');

//$ryan->move('el norte');

$ryan->attack($silence);
$ryan->attack($silence);
$ryan->attack($silence);
