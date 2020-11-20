@extends('budget.master')

@section('content')
    <div class="container my-3 mt-5 pt-1">

        <h1 class="mt-5 mb-5">Orçamento</h1>

        @if(!empty($budget))
            <h5><b>Cliente:</b> {{ $budget->client }}</h5>
            <h5><b>Vendedor:</b> {{ $budget->seller }}</h5>
            <h5><b>Descrição:</b><h5> <p>{{  $budget->description  }}</p>
            <h5><b>Preço:</b> R$ {{ $budget->price_formated }}</h5>
            <hr>
            <small><b>Criado em:</b> {{ $budget->created_at_formated }}</small><br>
            <small><b>Última atualização:</b> {{ $budget->updated_at_formated }}</small>
        @endif

        <div class="mt-4 mb-5">
            <a class="btn btn-secondary" href="{{ url('/') }}">Voltar</a>
        </div>
    </div>

@endsection