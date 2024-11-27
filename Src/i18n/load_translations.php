<?php

declare(strict_types=1);

const DEFAULT_LANGUAGE = 'pl';

function __(string $key, string $language = DEFAULT_LANGUAGE): string
{
    $translations = include 'translations.php';
    return $translations[$language][$key] ?? $key;
}
