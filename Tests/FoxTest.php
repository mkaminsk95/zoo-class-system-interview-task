<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Src\Animals\Fox;

#[CoversClass(Fox::class)]
class FoxTest extends TestCase
{
    private Fox $fox;
    private const string NAME = 'Max';

    public function setUp(): void
    {
        $this->fox = new Fox(self::NAME);
    }

    public function testGetName(): void
    {
        $this->assertSame(self::NAME, $this->fox->getName());
    }

    public function testToString(): void
    {
        $this->assertSame(__('Fox') . ' ' . self::NAME, (string)$this->fox);
    }

    public function testEatMeat(): void
    {
        $this->expectOutputString(self::NAME . __(' is eating meat.') . PHP_EOL);
        $this->fox->eat('meat');
    }

    public function testEatPlant(): void
    {
        $this->expectOutputString(self::NAME . __(' is eating plant.') . PHP_EOL);
        $this->fox->eat('plant');
    }

    public function testEatTrash(): void
    {
        $this->expectOutputString(self::NAME . __(' cannot eat this food.') . PHP_EOL);
        $this->fox->eat('trash');
    }

    public function testCombFur(): void
    {
        $this->expectOutputString(self::NAME . __(' is being combed.') . PHP_EOL);
        $this->fox->combFur();
    }
}
