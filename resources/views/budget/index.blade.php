@extends('budget.master')

@section('content')
    <div class="container my-3">

        <h1>Orçamentos</h1>

        @if (!empty($budgets))
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
                        <td>{{ $budget->description }}</td>
                        <td>R$ {{ number_format($budget->price, 2, ',', '.') }}</td>
                        <td>{{ $budget->budget_at }}</td>
                        <td>
                            <a href='{{ url('/orcamento/' . $budget->id) }}'>Ver mais</a> |
                            <a href='{{ url('/orcamento/editar/' . $budget->id) }}'>Editar</a> |
                            <a href='{{ url('/orcamento/remover/' . $budget->id) }}'>Remover</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif

    </div>
@endsection