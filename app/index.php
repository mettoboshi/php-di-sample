<?php

require_once __DIR__.'/../vendor/autoload.php';
require_once __DIR__ . '/fuga.php';
require_once __DIR__ . '/hoge.php';

use Psr\Container\ContainerInterface;

$container = new DI\Container();
$builder = new DI\ContainerBuilder();
$builder->addDefinitions([Hoge::class => function (ContainerInterface $c) {
    return new Hoge($c->get(Fuga::class));
},
    Fuga::class => function (ContainerInterface $c) {
        return new Fuga();
    },
]);

$container = $builder->build();
$container->get(Hoge::class)->hello();