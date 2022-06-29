<?php

use Src\Route;

Route::add('GET', '/hello', [Controller\Site::class, 'hello'])
    ->middleware('auth');
Route::add(['GET', 'POST'], '/signup', [Controller\Site::class, 'signup']);
Route::add(['GET', 'POST'], '/login', [Controller\Site::class, 'login']);
Route::add('GET', '/logout', [Controller\Site::class, 'logout']);
Route::add('GET', '/go', [Controller\Site::class, 'index']);
Route::add(['GET', 'POST'], '/newworker', [Controller\Site::class, 'newworker']);
Route::add(['GET', 'POST'], '/workers', [Controller\Site::class, 'workers']);
Route::add(['GET', 'POST'], '/disciplines', [Controller\Site::class, 'disciplines']);
