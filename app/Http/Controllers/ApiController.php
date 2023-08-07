<?php

namespace App\Http\Controllers;

use Psr\Http\Message\ResponseInterface;

class ApiController
{
    public function index(ResponseInterface $response){
        $response->getBody()->write(json_encode([
            'hello'=>'world'
        ], JSON_PRETTY_PRINT));

        return $response;
    }
}