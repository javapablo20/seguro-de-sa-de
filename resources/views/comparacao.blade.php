@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comparação de Planos</h1>

    <form method="POST" action="{{ route('compararPlanos') }}">
        @csrf
        <h2>Selecione os planos para comparar:</h2>
        @foreach($planos as $plano)
            <div>
                <input type="checkbox" name="planos[]" value="{{ $plano->id }}">
                <label>{{ $plano->nome }} - R$ {{ $plano->preco }}</label>
            </div>
        @endforeach
        <button type="submit">Comparar</button>
    </form>
</div>
@endsection