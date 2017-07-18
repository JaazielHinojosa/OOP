<?php

namespace Styde;

use Styde\Weapons;

require "../vendor/autoload.php";

$soldado = new Unit('Soldado', new Weapons\BasicSword());

$soldado->setArmor(new Armors\SilverArmor());

$arquero = new Unit('Arquero', new Weapons\FireBow());

$arquero->attack($soldado);

$arquero->attack($soldado);

$soldado->attack($arquero);
