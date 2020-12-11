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

Route::group(['namespace' => 'App\Http\Controllers\Form'], function(){
    //Metedos GET
    Route::get('/usuarios', 'TestController@listAllUsers')->name('users.listAll');
    Route::get('/usuarios/novo', 'TestController@formAddUser')->name('users.formAddUser');
    Route::get('/usuarios/editar/{user}', 'TestController@formEditUser')->name('users.formAddUser');
    Route::get('/usuarios/{user}', 'TestController@listUser')->name('users.list');


    //Metedos POST
    Route::post('/usuarios/store', 'TestController@storeUser')->name('users.store');

    //Metodos PUT/PATCH
    Route::put('/usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    //Route::patch('/usuarios/edit/{user}', 'TestController@edit')->name('users.edit');

    //Metodos DELETE
    Route::delete('/usuarios/destroy/{user}', 'TestController@destroy')->name('user.destroy');
});