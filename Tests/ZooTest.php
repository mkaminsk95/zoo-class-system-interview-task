<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Src\Animals\Elephant;
use Src\Animals\Fox;
use Src\Animals\Tiger;
use Src\Zoo;

#[CoversClass(Zoo::class)]
class ZooTest extends TestCase
{
    private Zoo $zoo;

    protected function setUp(): void
    {
        $this->zoo = new Zoo();
    }

    public function testAddAnimal(): void
    {
        $this->zoo->addAnimal(new Fox('Max'));
        $this->zoo->addAnimal(new Elephant('Dumbo'));
        $this->zoo->addAnimal(new Tiger('Rex'));

        $this->expectOutputString(
            __('Animals in the zoo:') . PHP_EOL .
            __('Fox') . ' Max' . PHP_EOL .
            __('Elephant') . ' Dumbo' . PHP_EOL .
            __('Tiger') . ' Rex' . PHP_EOL
        );

        $this->zoo->showAnimals();
    }
}
