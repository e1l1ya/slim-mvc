<?php

namespace Boot\Fondation;

use Boot\Fondation\Bootstrappers;

class HttpKernel extends Kernel
{
    /**
     * Global Middleware
     * @var array
     */
    public array $middleware = [];

    /**
     * Route Group Middleware
     */
    public array $middlewareGroups = [
        'api' => [],
        'web' => []
    ];

    public array $bootstrap = [
      Bootstrappers\LoadEnviromentVariables::class,
      Bootstrappers\LoadDebuggingPage::class,
      Bootstrappers\LoadHttpMiddleware::class,
      Bootstrappers\LoadServiceProviders::class,
    ];
}