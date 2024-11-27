<?php

declare(strict_types=1);

namespace Src;

use Src\Animals\Elephant;
use Src\Animals\Fox;
use Src\Animals\Rabbit;
use Src\Animals\Rhino;
use Src\Animals\SnowLeopard;
use Src\Animals\Tiger;

require __DIR__ . '/../vendor/autoload.php';
require __DIR__ . '/i18n/load_translations.php';

$firstTiger = new Tiger('Josh');
$secondTiger = new Tiger('John');
$fox = new Fox('Max');
$rabbit = new Rabbit('Steve');
$elephant = new Elephant('Dumbo');
$rhino = new Rhino('George');
$snowLeopard = new SnowLeopard('Pete');

echo $firstTiger . "\n";
echo $fox . "\n";
echo $elephant . "\n";

$zoo = new Zoo();
$zoo->addAnimals([
    $firstTiger,
    $secondTiger,
    $fox,
    $rabbit,
    $elephant,
    $rhino,
    $snowLeopard
]);

$zoo->showAnimals();
