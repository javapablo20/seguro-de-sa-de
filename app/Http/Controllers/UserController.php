<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function perfil()
    {
        // Obter o usuário autenticado
        $user = Auth::user();

        // Caso não esteja autenticado, redireciona para o login
        if (!$user) {
            return redirect()->route('login')->withErrors(['msg' => 'É necessário estar logado para acessar o perfil.']);
        }

        // Passa o usuário para a view do perfil
        return view('perfil', compact('user'));
    }
}
