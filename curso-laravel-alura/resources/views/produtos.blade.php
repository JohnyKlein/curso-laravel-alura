@extends('principal')

@section('conteudo')
<div class="container">
    <div class="row">
        <h1>Listagem de produtos</h1>
        <table class="table table-hover table-striped table-bordered">
            <?php foreach ($produtos as $p): ?>
                <tr>
                    <td><?= $p->nome ?></td>
                    <td><?= $p->valor ?></td> 
                    <td><?= $p->descricao ?></td>
                    <td><?= $p->quantidade ?></td>
                    <td>
                        <a href="/produtos/detalhaProduto/<?= $p->id ?>">Visualizar</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>
</div>
@stop