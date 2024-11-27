<?php

declare(strict_types=1);

namespace Src\Animals;

trait CombFur
{
    protected function combFur(): void
    {
        echo $this->name . " " . __('is being combed') . PHP_EOL;
    }
}