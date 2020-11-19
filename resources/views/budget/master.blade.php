
<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Oficina 2.0 | Orçamentos</title>

    <link rel="stylesheet" href="<?= asset('css/app.css'); ?>">
</head>
<body>

<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a href="#" class="navbar-brand"><b>Oficina 2.0</b></a>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item"><a href="<?= url('/'); ?>" class="nav-link">Listar orçamentos</a></li>
            <li class="nav-item"><a href="<?= url('/orcamento/novo'); ?>" class="nav-link">Cadastrar orçamento</a></li>
        </ul>
    </div>
</nav>

@yield('content')

<script src="<?= asset('js/app.js') ;?>"></script>
</body>
</html>