@extends('budget.master')

@section('content')
    <div class="container my-3">

        <h1 class="mt-5 mb-3">Atualizar &middot; Orçamento</h1>

        <form action="{{ url('/orcamentos/update', ['id' => $budget->id]) }}" method="post">

            {{ csrf_field() }}
            {{ method_field('PUT') }}

            <div class="form-group">
                <label for="client">Cliente</label>
            <input type="text" id="client" name="client" class="form-control" value="{{ $budget->client }}">
            </div>
            <div class="form-group">
                <label for="seller">Vendedor</label>
                <input type="text" id="seller" name="seller" class="form-control" value="{{ $budget->seller }}">
            </div>
            <div class="form-group">
                <label for="description">Descrição</label>
                <textarea name="description" id="description" cols="30" rows="10" class="form-control">{{ $budget->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="price">Preço</label>
                <input type="text" id="price" name="price" class="form-control" value="{{ $budget->price }}">
            </div>

            <button type="submit" class="btn btn-primary mt-3 mb-5">Atualizar</button>
        </form>
    </div>

@endsection