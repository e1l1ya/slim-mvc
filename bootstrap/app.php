<?php

use DI\Container;
use App\Http\HttpKernel;
use DI\Bridge\Slim\Bridge as App;

$app = App::Create(new Container);

return HttpKernel::bootstrap($app)->getApplication();

