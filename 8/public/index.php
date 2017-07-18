<?php

namespace Styde;

use Styde\Weapons;

require "../vendor/autoload.php";

$ramm = new Soldier('Ramm', new Weapons\BasicSword());

$ramm->setArmor(new Armors\BronzeArmor());

$silence = new Archer('Silence', new Weapons\BasicBow());

$silence->attack($ramm);

$silence->attack($ramm);

$ramm->attack($silence);
