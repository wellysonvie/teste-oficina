<!doctype html>
<html lang="pt-br" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oficina 2.0 | Orçamentos</title>

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="d-flex flex-column h-100">

    <nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark">
        <div class="container">
            <a href="{{ url('/') }}" class="navbar-brand"><b>Oficina 2.0</b></a>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item"><a href="{{ url('/') }}" class="nav-link font-weight-bold">Listar orçamentos</a>
                </li>
                <li class="nav-item"><a href="{{ url('/orcamentos/novo') }}" class="nav-link font-weight-bold">Cadastrar
                        orçamento</a></li>
            </ul>
        </div>
    </nav>

    @yield('content')

    <div class="footer-copyright mt-auto text-center py-3 text-secondary">2020 | Desenvolvido por 
        <a target="_blank" class="text-secondary font-weight-bold" href="https://github.com/wellysonvie"> @wellysonvie</a>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
</body>

</html>
