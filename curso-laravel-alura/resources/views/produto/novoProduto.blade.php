@extends('layout/principal')

@section('conteudo')
    
    <form action="/produtos/adicionaProduto" method="POST">
        <div class="form-group">
            <input type="hidden" name="_token" value="{{csrf_token()}}">
            <label>Nome</label>
            <input name="nome" type="text" class="form-control"/>
            <label>Valor</label>
            <input name="valor" type="text" class="form-control"/>
            <label>Quantidade</label>
            <input name="quantidade" type="text" class="form-control"/>
            <label>Descricao</label>
            <textarea name="descricao" cols="30" rows="10" class="form-control"></textarea>

            <input type="submit" class="btn btn-success btn-estoque-sucess" value="Salvar"/>
        </div>
    </form>

@stop