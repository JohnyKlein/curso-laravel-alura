<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function listaProdutos(){
        $produtos = DB::select("SELECT * FROM produtos");
        
        return view("produto/produtos")->withProdutos($produtos);
    }

    public function detalhaProduto() {
        $id = Request::route("id");
        $produto = DB::select("SELECT * FROM produtos WHERE id = ?", [$id]);

        return view("produto/produtoDetalhe")->withProduto($produto[0]);
    }

    public function novoProduto() {
        return view("produto/novoProduto");
    }

    public function adicionaProduto() {
        $nome = Request::input('nome');
        $valor = Request::input('valor');
        $quantidade = Request::input('quantidade');
        $descricao = Request::input('descricao');

        DB::insert("INSERT INTO produtos (nome, quantidade, valor, descricao) VALUES (?,?,?,?)",
            array($nome, $valor, $quantidade, $descricao));
        
        return redirect("/produtos")->withInput();
    }
}