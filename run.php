#!/usr/bin/env php
<?php
// application.php

require __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Console\Application;

$loader = new \Twig\Loader\FilesystemLoader(__DIR__ . '/templates');
$twig = new \Twig\Environment($loader, [
    'cache' => false,
]);

$config = [
    'twig' => $twig,
];

$application = new Application();

$application->add(new \Michi\JsonToClass\Command\ConvertCommand(null, $config));
$application->add(new \Michi\JsonToClass\Command\DynamicConvertCommand(null, $config));

$application->run();
