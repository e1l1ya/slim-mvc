<?php

namespace Boot\Fondation\Bootstrappers;

use Boot\Fondation\Kernel;
use Psr\Container\ContainerExceptionInterface;
use Psr\Container\NotFoundExceptionInterface;

class LoadHttpMiddleware extends Bootstrapper
{
    /**
     * @throws ContainerExceptionInterface
     * @throws NotFoundExceptionInterface
     */
    public function boot(){
        $kernel = $this->app->getContainer()->get(Kernel::class);
        $this->app->getContainer()->set('middleware', fn () =>[
            'global' => $kernel->middleware,
            'api' => $kernel->middlewareGroups['api'],
            'web' => $kernel->middlewareGroups['web']
        ]);
    }
}