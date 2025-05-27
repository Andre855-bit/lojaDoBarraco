<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CriarUsuarioController extends Controller
{
    public function criarUsuario(){
        return View('site.criar-usuario');
    }
}
