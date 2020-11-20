@extends('budget.master')

@section('content')
    <div class="container my-3">

        <h1 class="mt-5 mb-3">Orçamentos</h1>

        @if(!empty(session('status')))
            <div class="alert alert-{{ session('status') }} alert-dismissible fade show" role="alert">
                <strong>{{ session('msg') }}</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <form class="form-inline mt-4 mb-4 d-flex justify-content-between">
            {{ csrf_field() }}
            <div class="search-client-seller d-flex justify-content-between">
                <label for="input-search-name">Nome:&nbsp;</label>
                <input class="form-control mr-sm-2" type="search" placeholder="Cliente ou vendedor" id="input-search-name"
                    value="{{ $name }}">
            </div>
            <div class="filter-date d-flex justify-content-between">
                <label for="input-initial-date">Data inicial:&nbsp;</label>
                <input class="form-control mr-sm-2" type="date" id="input-initial-date" value="{{ $initialDate }}">
                <label for="input-final-date">Data final:&nbsp;</label>
                <input class="form-control mr-sm-2" type="date" id="input-final-date" value="{{ $finalDate }}">
                <button class="btn btn-outline-primary my-2 my-sm-0 mr-sm-2" id="btn-search-date"
                    type="button">Filtrar</button>
                <button class="btn btn-outline-secondary my-2 my-sm-0" id="btn-clear-filters" type="button">Limpar
                    filtros</button>
            </div>
        </form>

        @if (!$budgets->isEmpty())
            <table class='table table-striped table-hover'>
                <thead class='bg-primary text-white'>
                    <td>ID</td>
                    <td>Cliente</td>
                    <td>Vendedor</td>
                    <td>Descrição</td>
                    <td>Preço</td>
                    <td>Data</td>
                    <td>Ações</td>
                </thead>
                @foreach ($budgets as $budget)
                    <tr>
                        <td>{{ $budget->id }}</td>
                        <td>{{ $budget->client }}</td>
                        <td>{{ $budget->seller }}</td>
                        <td class="d-inline-block text-truncate" style="max-width: 300px;">{{ $budget->description }}
                        </td>
                        <td>R$ {{ $budget->price_formated }}</td>
                        <td>{{ $budget->created_at_formated }}</td>
                        <td>
                            <a href='{{ url('/orcamentos/' . $budget->id) }}'>Ver mais</a> |
                            <a href='{{ url('/orcamentos/editar/' . $budget->id) }}'>Editar</a> |
                            <a href='{{ url('/orcamentos/remover/' . $budget->id) }}'>Remover</a>
                        </td>
                    </tr>
                @endforeach
            </table>

            <div class="total-budgets mb-3">
                <small>Total: {{ $budgets->total() }} | exibindo {{ $budgets->perPage() }} por página</small>
            </div>

            <div>
                {{ $budgets->appends(['name' => $name, 'initial_date' => $initialDate, 'final_date' => $finalDate])->links() }}
            </div>
        @else
            <div class="text-center mt-5">
                <span><b>Nenhum orçamento encontrado!</b></span>
            </div>
        @endif

    </div>

@endsection
