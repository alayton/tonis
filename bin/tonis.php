<?php

$autoloadFiles = [
    __DIR__ . '/../vendor/autoload.php',
    __DIR__ . '/../../../autoload.php'
];

foreach ($autoloadFiles as $file) {
    if (file_exists($file)) {
        require_once $file;
    }
}

