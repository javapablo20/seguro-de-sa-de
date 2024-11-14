<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __construct()
    {
        // Garante que apenas usuários autenticados possam acessar os métodos deste controller
        $this->middleware('auth');
    }

    public function perfil()
    {
        // Obtém o usuário autenticado e passa para a view do perfil
        $user = Auth::user();
        return view('perfil', compact('user'));
    }
}
