<?php

use PSR\Container\ContainerInterface;

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    PDO::class => function (): PDO {
        $dbPath = __DIR__ . '/../banco.sqlite';
        return new PDO("sqlite:{$dbPath}");
    },
    \League\Plates\Engine::class => function () {
    $templatePath = __DIR__ . '/../views';
    return new \League\Plates\Engine($templatePath);
    },
]);
/** @var ContainerInterface $container */
$container = $builder->build();

return $container;
