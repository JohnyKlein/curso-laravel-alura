<html>
<body>
    <h1>Listagem de produtos</h1>
    <div class="col-xs-12">
        <?php foreach ($produtos as $p): ?>
            <div class="col-xs-12">
                <h4 style="display:inline">Nome: </h4>
                <?= $p->nome ?>
                <h4 style="display:inline">Valor: </h4> 
                <?= $p->valor ?>
                <h4 style="display:inline">Descricao: </h4>
                <?= $p->descricao ?>
                <h4 style="display:inline">Quantidade: </h4>
                <?= $p->quantidade ?>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>