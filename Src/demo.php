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

echo __('Animals can be used as strings:') . PHP_EOL;
echo $firstTiger . ', ' . $fox . ', ' . $elephant . PHP_EOL . PHP_EOL;

echo __('Animals can be combed:') . PHP_EOL;
echo $firstTiger->combFur() . $fox->combFur() . PHP_EOL;

echo __('Animals can be added to zoo and then listed:') . PHP_EOL;
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
