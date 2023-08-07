<?php

use App\Support\Route;

Route::get("/home/{name}", 'WelcomeController@index');
Route::get("/home/{name}/{id}", 'WelcomeController@show');
Route::get('{routes:.+}', 'WelcomeController@notfound');