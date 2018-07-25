@extends('principal')

@section('conteudo')
<div class="container">
    <div class="row">
        <h1>Detalhe do produto {{$produto->nome}} </h1>
        <ul>
            <li>
                <b>Descrição: </b> {{$produto->descricao or 'Nao tem descricao.'}}
            </li>
            <li>
                <b>Quantidade: </b> {{$produto->quantidade}}
            </li>
        </ul>
    </div>
</div>
@stop