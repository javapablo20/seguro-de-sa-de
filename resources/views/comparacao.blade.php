@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Comparação de Planos</h1>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif

    <form method="POST" action="{{ route('compararPlanos') }}">
        @csrf
        <h2>Selecione os planos para comparar:</h2>
        @foreach($planos as $plano)
            <div>
                <input type="checkbox" name="planos[]" value="{{ $plano->id }}">
                <label>{{ $plano->nome }} - R$ {{ $plano->preco }}</label>
            </div>
        @endforeach
        <br>
        <button type="submit">Comparar</button>
    </form>
</div>
@endsection