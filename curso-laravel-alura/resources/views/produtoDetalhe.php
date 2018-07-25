<html>
<head>
    <link href="/css/app.css" rel="stylesheet">
    <title>Controle de estoque</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h1>Detalhe do produto <?= $produto->nome ?> </h1>
            <ul>
                <li>
                    <b>Descrição: </b> <?= $produto->descricao ?>
                </li>
                <li>
                    <b>Quantidade: </b> <?= $produto->quantidade ?>
                </li>
            </ul>
        </div>
    </div>
</body>
</html>