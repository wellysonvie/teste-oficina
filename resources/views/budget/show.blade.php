@extends('budget.master')

@section('content')
    <div class="container my-3">

        <h1 class="mt-5 mb-3">Orçamento</h1>

        @if(!empty($budget))
            <h5><b>Cliente:</b> {{ $budget->client }}</h5>
            <h5><b>Vendedor:</b> {{ $budget->seller }}</h5>
            <h5><b>Descrição:</b><h5> <p>{{  $budget->description  }}</p>
            <h5><b>Preço:</b> R$ {{ number_format($budget->price, 2, ',', '.') }}</h5>
            <hr>
            <small><b>Criado em:</b> {{ date_format($budget->created_at, 'd/m/Y H:i') }}</small><br>
            <small><b>Última atualização:</b> {{ date_format($budget->updated_at, 'd/m/Y H:i') }}</small>
        @endif
    </div>

@endsection