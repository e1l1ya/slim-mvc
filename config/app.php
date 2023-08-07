<?php
return  [
    'name' => env('APP_NAME', 'Slim default'),
    'providers' => [
        \App\Providers\BladeServiceProvider::class,
        \App\Providers\RouteServiceProvider::class,
    ]
];