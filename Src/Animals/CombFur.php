<?php

declare(strict_types=1);

namespace Src\Animals;

trait CombFur
{
    public function combFur(): void
    {
        echo $this->name . __(' is being combed.') . PHP_EOL;
    }
}
