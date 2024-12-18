<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'cpf' => 'required|string|max:14|unique:clientes,cpf',
            'datanascimento' => 'required|date',
            'email' => 'required|string|email|max:255|unique:clientes,email',
            'endereco' => 'required|string|max:255',
            'historicomedico' => 'nullable|string',
            'telefone' => 'required|string|max:15',
            'senha' => 'required|string|min:6|confirmed',
        ]);

        $idade = \Carbon\Carbon::parse($request->datanascimento)->age;

        // Cria um novo cliente
        $cliente = Cliente::create([
            'nome' => $request->nome,
            'cpf' => $request->cpf,
            'datanascimento' => $request->datanascimento,
            'email' => $request->email,
            'endereco' => $request->endereco,
            'telefone' => $request->telefone,
            'idade' => $idade,
            'historicomedico' => $request->historicomedico,  // Opcional
        ]);

        // Cria o usuário na tabela 'users'
        User::create([
            'name' => $cliente->nome,
            'email' => $cliente->email,
            'password' => Hash::make($request->senha),
            'cliente_id' => $cliente->id, // Relaciona com o cliente
        ]);

        return redirect()->route('bemvindo')->with('success', 'Registro realizado com sucesso! Bem-vindo!');
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email',
            'senha' => 'required|string',
        ]);

        // Tenta autenticar o usuário
        if (Auth::attempt(['email' => $request->email, 'password' => $request->senha])) {
            return redirect()->route('bemvindo')->with('success', 'Login realizado com sucesso!');
        }

        return back()->withErrors(['email' => 'Credenciais inválidas.']);
    }
}
