<?php

namespace Boot\Fondation\Bootstrappers;

use Zeuxisoo\Whoops\Slim\WhoopsMiddleware;

class LoadDebuggingPage extends Bootstrapper
{
    public function bot()
    {
        if(env('APP_DEBUG', false)){
            $this->app->add(new WhoopsMiddleware());
        }
    }
}