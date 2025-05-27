<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarLojasController extends Controller
{
    public function criarLoja(){
        return View('site.criar-loja');
    }
}
