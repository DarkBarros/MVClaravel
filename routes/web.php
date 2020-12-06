<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/listausuario','App\Http\Controllers\UserController@listUser');

Route::group([
    'middleware' => [],
    'prefix' => 'admin',
    'namespace' => 'App\Http\Controllers\Admin',
    'name' => 'admin.'
], function(){
    Route::get("/dashboard", "TesteController@teste")->name('dashboard');
    Route::get("/inicio", "TesteController@inicio")->name('inicio');
    Route::get("/financeiro", "TesteController@financeiro")->name('financeiro');
    Route::get("/produtos", "TesteController@produtos")->name('products');
    Route::get("/", function(){
        return redirect()->route('admin.dashboard');
    })->name('home');
});

Route::get('/login', function(){
    return '<h1>Login</h1>';
})->name('login');