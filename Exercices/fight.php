<?php
require_once(__DIR__ . '/Hero.php');
require_once(__DIR__ . '/Orc.php');


$dev = new Hero('Dragonslayer', 250, 'DarkSuit', 500, 2000, 0);

$pc = new Orc(500, 0);

while (($dev->getHealth() > 0) && ($pc->getHealth() > 0)) {

    $pc->setDamage($pc->attack());
    $dev->attacked($pc->getDamage());
    if ($dev->getHealth() <= 0) {
        $winner = 'pc';
        $message = 'Le pc gagne avec ' . $pc->getHealth() . ' de vie';
    } elseif ($dev->getRage() >= 100) {
        $pc->setHealth($pc->getHealth() - $dev->getWeaponDamage());

        $dev->setRage(0);
    }
    if ($pc->getHealth() <= 0) {
        $winner = 'dev';
        $message = 'Le dev gagne avec ' . $dev->getHealth() . ' de vie';
    }
} ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Exercices/fight.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Fight</title>
</head>

<body>

    <h1 class="text-center mt-4"><?= $message ?></h1>
    <div class="oui <?= $winner ?>"> </div>

</body>

</html>