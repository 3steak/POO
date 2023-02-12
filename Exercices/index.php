<?php
require_once(__DIR__ . '/Character.php');
require_once(__DIR__ . '/Hero.php');
require_once(__DIR__ . '/Orc.php');


$Hero = new Hero('Dragonslayer', 250, 'DarkSuit', 600, 2000, 0);

$Orc = new Orc(500, 0);

while ($Hero->getHealth() > 0) {
    echo $Hero;
    echo $Orc;
    $Hero->attacked($Orc->attack());
}
