<?php

namespace Boot\Fondation\Bootstrappers;

use Dotenv\Dotenv;
use Dotenv\Exception\InvalidPathException;

class LoadEnviromentVariables extends Bootstrapper
{
    public function boot()
    {
        try{
            $env = Dotenv::createImmutable(base_path());
            $env->load();
        } catch (InvalidPathException $e){}    }
}