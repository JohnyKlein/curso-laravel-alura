<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Estoque Laravel</title>
    <link href="/css/app.css" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="/produtos" class="navbar-brand">Estoque Laravel</a>
                </div>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/produtos/novoProduto">Novo</a></li>
                    <li><a href="/produtos">Listagem</a></li>
                </ul>
            </div>
        </nav>
        
        @yield('conteudo')

        <footer class="footer">
            <p>By Johny Klein</p>
        </footer>

    </div>
</body>
</html>