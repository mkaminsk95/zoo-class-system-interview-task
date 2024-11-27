<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Src\Animals\Elephant;

#[CoversClass(Elephant::class)]
class ElephantTest extends TestCase
{
    private Elephant $elephant;
    private const string NAME = 'Dumbo';

    public function setUp(): void
    {
        $this->elephant = new Elephant(self::NAME);
    }

    public function testGetName(): void
    {
        $this->assertSame(self::NAME, $this->elephant->getName());
    }

    public function testToString(): void
    {
        $this->assertSame(__('Elephant') . ' ' . self::NAME, (string)$this->elephant);
    }

    public function testEatPlant(): void
    {
        $this->expectOutputString(self::NAME . __(' is eating plant.') . PHP_EOL);
        $this->elephant->eat('plant');
    }

    public function testEatMeat(): void
    {
        $this->expectOutputString(self::NAME . __(' cannot eat this food.') . PHP_EOL);
        $this->elephant->eat('meat');
    }

    public function testEatTrash(): void
    {
        $this->expectOutputString(self::NAME . __(' cannot eat this food.') . PHP_EOL);
        $this->elephant->eat('trash');
    }
}
