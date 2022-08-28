<?php
declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use Psr\Container\ContainerInterface;
use myapp\Hoge;
use myapp\Fuga;

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