<?php

declare(strict_types=1);

const DEFAULT_LANGUAGE = 'pl';

function __($key, $language = DEFAULT_LANGUAGE) {
    $translations = include 'translations.php';
    return $translations[$language][$key] ?? $key;
}