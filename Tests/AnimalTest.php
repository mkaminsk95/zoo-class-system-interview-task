<?php

declare(strict_types=1);

namespace Tests;

use PHPUnit\Framework\Attributes\CoversClass;
use PHPUnit\Framework\TestCase;
use Src\Animals\Animal;

#[CoversClass(Animal::class)]
class AnimalTest extends TestCase
{
    private Animal $animal;
    private const string NAME = 'Buddy';
    private const string SPECIES = 'Fox';

    protected function setUp(): void
    {
        // Create a concrete implementation of the abstract Animal class for testing
        $this->animal = new class(self::NAME, self::SPECIES) extends Animal {};
    }

    public function testGetName(): void
    {
        $this->assertSame(self::NAME, $this->animal->getName());
    }

    public function testToString(): void
    {
        $this->assertSame(__(self::SPECIES) . ' ' . self::NAME, (string)$this->animal);
    }
}
