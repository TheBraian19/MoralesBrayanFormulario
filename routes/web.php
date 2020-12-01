<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/validar', 'PruebasController@validar');

Route::get('/formulario','PruebasController@login');



