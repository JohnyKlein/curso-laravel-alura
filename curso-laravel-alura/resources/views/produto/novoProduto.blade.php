@extends('layout/principal')

@section('conteudo')
    
    <form>
        <div class="form-group">
            <label>Nome</label>
            <input type="text" class="form-control"/>
            <label>Valor</label>
            <input type="text" class="form-control"/>
            <label>Quantidade</label>
            <input type="text" class="form-control"/>
            <label>Descricao</label>
            <textarea name="Descricao" cols="30" rows="10" class="form-control"></textarea>

            <input type="submit" class="btn btn-success btn-estoque-sucess" value="Salvar"/>
        </div>
    </form>

@stop