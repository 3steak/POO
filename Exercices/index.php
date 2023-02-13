<?php
require_once(__DIR__ . '/Hero.php');
require_once(__DIR__ . '/Orc.php');


$mika = new Hero('Dragonslayer', 250, 'Boubou', 600, 2000, 0);

$flo = new Orc(500, 0);

echo $mika;
echo $flo;
die;















while ($Hero->getHealth() > 0) {

    $Orc->setDamage($Orc->attack());
    $Hero->attacked($Orc->getDamage());
    if ($Hero->getHealth() < 0) {
        echo "L'Orc frappe à " . $Orc->getDamage() . " d'attaque ! Le héro meurt ! ";
    } else {

        echo "L'Orc frappe à " . $Orc->getDamage() . " d'attaque ! Il reste " . $Hero->getHealth() . " de vie au Hero et sa rage est de " . $Hero->getRage() . "<br><hr>";
    }
}
