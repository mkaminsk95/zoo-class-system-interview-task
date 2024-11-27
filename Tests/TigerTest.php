<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Src\Animals\Tiger;

#[CoversClass(Tiger::class)]
class TigerTest extends TestCase
{
    private Tiger $tiger;
    private const string NAME = 'Buddy';

    public function setUp(): void
    {
        $this->tiger = new Tiger(self::NAME);
    }

    public function testGetName(): void
    {
        $this->assertSame(self::NAME, $this->tiger->getName());
    }

    public function testToString(): void
    {
        $this->assertSame(__('Tiger') . ' ' . self::NAME, (string)$this->tiger);
    }

    public function testEatMeat(): void
    {
        $this->expectOutputString(self::NAME . __(' is eating meat.') . PHP_EOL);
        $this->tiger->eat('meat');
    }

    public function testEatPlant(): void
    {
        $this->expectOutputString(self::NAME . __(' cannot eat this food.') . PHP_EOL);
        $this->tiger->eat('plant');
    }

    public function testEatTrash(): void
    {
        $this->expectOutputString(self::NAME . __(' cannot eat this food.') . PHP_EOL);
        $this->tiger->eat('trash');
    }

    public function testCombFur(): void
    {
        $this->expectOutputString(self::NAME . __(' is being combed.') . PHP_EOL);
        $this->tiger->combFur();
    }
}
