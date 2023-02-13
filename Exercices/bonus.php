<?php
require_once(__DIR__ . '/Character.php');
require_once(__DIR__ . '/Hero.php');
require_once(__DIR__ . '/Orc.php');


$Hero = new Hero('Dragonslayer', 250, 'DarkSuit', 600, 2000, 0);

$Orc = new Orc(500, 0);

while (($Hero->getHealth() > 0) && ($Orc->getHealth() > 0)) {

    $Orc->setDamage($Orc->attack());
    $Hero->attacked($Orc->getDamage());
    if ($Hero->getHealth() <= 0) {
        echo "L'Orc frappe à " . $Orc->getDamage() . " d'attaque ! Le héro meurt ! ";
    } elseif ($Hero->getRage() >= 100) {
        $Orc->setHealth($Orc->getHealth() - $Hero->getWeaponDamage());

        echo "L'Orc frappe à " . $Orc->getDamage() . " d'attaque ! Il reste " . $Hero->getHealth() . " de vie au Hero et sa rage est de " . $Hero->getRage() . " il attaque l'Orc à " . $Hero->getWeaponDamage() . " et il reste donc " . $Orc->getHealth() . " de vie à l'Orc<br><hr>";
        $Hero->setRage(0);
    }
    if ($Orc->getHealth() <= 0) {
        echo "L'Orc est mort ! <br><hr>";
    }
}
