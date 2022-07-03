<?php
namespace Imefisto\SwooleSlim\Testing\Infrastructure\HttpServer;

use Imefisto\MQTTServer\Infrastructure\HttpServer\App;

class AppTest extends \PHPUnit\Framework\TestCase
{
    /**
     * @test
     */
    public function bootstrapHasSlimInstance()
    {
        $this->assertInstanceOf(
            \Slim\App::class,
            App::create()
        );
    }
}
