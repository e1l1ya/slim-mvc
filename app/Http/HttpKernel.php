<?php

namespace App\Http;

use Boot\Fondation\HttpKernel as Kernel;
class HttpKernel extends Kernel
{
    /**
     * Global Middleware
     * @var array
     */
    public array $middleware = [
    ];

    /**
     * Route Group Middleware
     */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];
}