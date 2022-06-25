<?php

use Swoole\Http\Request;
use Swoole\Http\Response;
use Swoole\Runtime;
use Swoole\Http\Server;

Runtime::enableCoroutine();

$server = new Server('0.0.0.0', 9501, SWOOLE_PROCESS);

$server->on('request', function (
    Request $swooleRequest,
    Response $swooleResponse
) {
    print_r($swooleRequest->server);
    $swooleResponse->status(200);
    $swooleResponse->end();
});

$server->start();
