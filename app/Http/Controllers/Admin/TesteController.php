<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function teste()
    { 
        return 'Teste Controller';
    }
    public function produtos()
    { 
        return '<h1>Produtos<h1>';
    }
    public function financeiro()
    { 
        return '<h1>Financeiro<h1>';
    }
    public function inicio()
    {
        return view('login');
    }
}
