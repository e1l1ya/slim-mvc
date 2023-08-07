<?php

namespace App\Http\Controllers;

use App\Support\View;

class WelcomeController
{
    public function index(View $view, $name)
    {
        return $view('auth.home', compact('name'));
    }

    public function show(View $view, $name, $id){
        return $view('auth.home', compact('name', 'id'));
    }

    // 404 Error
    public function notfound(View $view){
        return $view('error.notfound');
    }
}
