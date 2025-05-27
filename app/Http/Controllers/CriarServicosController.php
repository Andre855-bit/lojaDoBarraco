<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarServicosController extends Controller
{
    public function criarServico(){
        return View('site.criar-servicos');
    }
}
