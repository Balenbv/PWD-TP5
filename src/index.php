<?php

declare(strict_types=1);
require __DIR__ . '/../vendor/autoload.php';

error_reporting(E_ALL);
ini_set('display_errors', '1');
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

function holaMundo()
{
    return;
}

echo holaMundo(lksjdf);

