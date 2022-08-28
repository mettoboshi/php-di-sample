<?php declare(strict_types=1);

require_once __DIR__.'/../vendor/autoload.php';

use PHPUnit\Framework\TestCase;
use DI\Container;
use myapp\Hoge;
use myapp\Fuga;

final class HogeTest extends TestCase
{
    private $container;

    protected function setUp(): void
    {
        $builder = new DI\ContainerBuilder();
        $this->container = $builder->build();
    }

    public function testHoge(): void
    {
        $fuga = new Fuga();
        $hoge = new Hoge($fuga);

        self::assertSame("HOGEFUGA", $hoge->hello());
    }

    public function testHogeDI(): void
    {
        self::assertSame("HOGEFUGA", $this->container->get(Hoge::class)->hello());
    }
}