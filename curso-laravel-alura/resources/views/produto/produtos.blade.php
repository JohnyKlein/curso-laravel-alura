@extends('layout/principal')

@section('conteudo')
    <div class="container-fluid lista-produto">
        <h1>Listagem de produtos</h1>
        @if (empty($produtos))
            <p>Nao ha nenhum produto cadastrado!</p>
        @else
            <table class="table table-hover table-striped table-bordered">
                @foreach ($produtos as $p)
                    <tr class="{{$p->quantidade <= 1 ? 'danger' : ''}}">
                        <td>{{ $p->nome }}</td>
                        <td>{{ $p->valor }}</td> 
                        <td>{{ $p->descricao }}</td>
                        <td>{{ $p->quantidade }}</td>
                        <td>
                            <a href="/produtos/detalhaProduto/{{$p->id}}">Visualizar</a>
                        </td>
                    </tr>
                @endforeach
            </table>
        @endif
    </div>

    @if(old('nome'))
        Produto {{old('nome')}} adicionado com sucesso!
    @endif

@stop