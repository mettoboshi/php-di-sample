<?php declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use myapp\Hoge;
use myapp\Fuga;

final class HogeTest extends TestCase
{
    public function testHoge(): void
    {
        $fuga = new Fuga();
        $hoge = new Hoge($fuga);

        self::assertSame("HOGEFUGA", $hoge->hello());
    }

    public function testHogeDI(): void
    {
        $builder = new DI\ContainerBuilder();
        $container = $builder->build();

        self::assertSame("HOGEFUGA", $container->get(Hoge::class)->hello());
    }
}