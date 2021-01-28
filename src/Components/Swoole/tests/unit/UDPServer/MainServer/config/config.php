<?php

declare(strict_types=1);

return [
    'configs'    => [
    ],
    // bean扫描目录
    'beanScan'    => [
        'Imi\Swoole\Test\UDPServer\MainServer\Controller',
        'Imi\Swoole\Test\UDPServer\MainServer\Listener',
        'Imi\Swoole\Test\UDPServer\MainServer\Error',
    ],
    'beans'    => [
        'UdpDispatcher'    => [
            'middlewares'    => [
                \Imi\Server\UdpServer\Middleware\RouteMiddleware::class,
                \Imi\Swoole\Test\UDPServer\MainServer\Middleware\Test::class,
            ],
        ],
        'ConnectContextStore'   => [
            'handlerClass'  => \Imi\Swoole\Server\ConnectContext\StoreHandler\MemoryTable::class,
        ],
        'ConnectContextMemoryTable' => [
            'tableName' => 'connectContext',
        ],
        'ServerGroup'   => [
            'status'    => false,
        ],
        'UdpRouteNotFoundHandler'   => [
            'handler'   => 'RouteNotFound',
        ],
    ],
    'controller'    => [
        'singleton' => true,
    ],
];
