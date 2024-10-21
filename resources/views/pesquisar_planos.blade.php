@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Pesquisar Planos de Saúde</h1>

    <form method="GET" action="{{ route('pesquisarPlanos') }}">
        <div>
            <label for="tipo">Tipo de Plano:</label>
            <select name="tipo" id="tipo">
                <option value="">Selecione</option>
                @foreach($tipos as $tipo)
                    <option value="{{ $tipo->tipo }}">{{ $tipo->tipo }}</option>
                @endforeach
            </select>
        </div>

        <div>
            <label for="faixaetaria">Faixa Etária:</label>
            <select name="faixaetaria" id="faixaetaria">
                <option value="">Selecione</option>
                @foreach($faixaEtarias as $faixa)
                    <option value="{{ $faixa->faixaetaria }}">{{ $faixa->faixaetaria }}</option>
                @endforeach
            </select>
        </div>

        <button type="submit">Pesquisar</button>
    </form>

    <h2>Resultados da Pesquisa:</h2>
    @if($planos->isEmpty())
        <p>Nenhum plano encontrado para os critérios selecionados.</p>
    @else
        <ul>
            @foreach($planos as $plano)
                <li>{{ $plano->nome }} - R$ {{ $plano->preco }}</li>
            @endforeach
        </ul>
    @endif
</div>
@endsection