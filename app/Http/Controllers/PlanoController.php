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
        // Obtenha tipos e faixas etárias distintas
        $tipos = Plano::select('tipo')->distinct()->get();
        $faixaEtarias = Plano::select('faixaetaria')->distinct()->get();

        // Inicializa uma variável para armazenar os resultados
        $resultados = null;

        // Query inicial para buscar planos
        $planos = Plano::query();

        // Adiciona filtro de tipo se estiver presente
        if ($request->filled('tipo')) {
            \Log::info('Filtro de tipo aplicado: ' . $request->tipo);
            $planos->where('tipo', $request->tipo);
        }

        // Adiciona filtro de faixa etária se estiver presente
        if ($request->filled('faixaetaria')) {
            \Log::info('Filtro de faixa etária aplicado: ' . $request->faixaetaria);
            $planos->where('faixaetaria', $request->faixaetaria);
        }

        // Executa a consulta e obtém os resultados
        $resultados = $planos->get();

        \Log::info('Resultados da pesquisa: ', $resultados->toArray());

        return view('pesquisar_planos', compact('resultados', 'tipos', 'faixaEtarias'));
    }

}
