@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Resultados da Comparação de Planos</h1>

    @if($planosSelecionados->isEmpty())
        <p>Nenhum plano selecionado para comparação.</p>
    @else
        <div class="grid grid-cols-{{ count($planosSelecionados) }} gap-4">
            @foreach ($planosSelecionados as $plano)
                <div class="bg-white shadow-md p-4">
                    <h2>{{ $plano->nome }}</h2>
                    <p><strong>Tipo:</strong> {{ $plano->tipo }}</p>
                    <p><strong>Benefícios:</strong> {{ $plano->beneficios }}</p>
                    <p><strong>Faixa Etária:</strong> {{ $plano->faixaetaria }}</p>
                    <p><strong>Preço:</strong> R$ {{ $plano->preco }}</p>
                </div>
            @endforeach
        </div>
    @endif
</div>
@endsection