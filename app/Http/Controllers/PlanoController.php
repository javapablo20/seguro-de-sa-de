<?php

namespace App\Http\Controllers;

use App\Models\Plano;
use Illuminate\Http\Request;

class PlanoController extends Controller
{
    // Método para exibir a página de comparação
    public function showComparisonForm()
    {
        $planos = Plano::all(); // Recuperar todos os planos para exibição
        return view('comparacao', compact('planos'));
    }

    // Método para comparar planos
    public function comparar(Request $request)
    {
        $request->validate([
            'planos' => 'required|array', // Certifica-se de que 'planos' é um array
            'planos.*' => 'exists:planos,id', // Verifica se cada ID existe na tabela de planos
        ]);

        if (empty($request->input('planos'))) {
            return redirect()->route('compararPlanosForm')->with('error', 'Nenhum plano selecionado para comparação.');
        }

        // Recuperar os planos selecionados
        $planosSelecionados = Plano::whereIn('id', $request->input('planos'))->get();

        // Exibir os planos lado a lado para comparação
        return view('comparacao_resultado', compact('planosSelecionados'));
    }

    public function showSearchForm(Request $request)
    {
        $tipos = Plano::select('tipo')->distinct()->get();
        $faixaEtarias = Plano::select('faixaetaria')->distinct()->get();
        // Aqui você pode adicionar os critérios de cobertura, se houver.

        $planos = Plano::query();

        // Adicionar filtros
        if ($request->filled('tipo')) {
            $planos->where('tipo', $request->tipo);
        }

        if ($request->filled('faixaetaria')) {
            $planos->where('faixaetaria', $request->faixaetaria);
        }

        $planos = $planos->get();

        return view('pesquisar_planos', compact('planos', 'tipos', 'faixaEtarias'));
    }
}
