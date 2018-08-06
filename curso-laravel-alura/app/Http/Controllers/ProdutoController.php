<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function listaProdutos(){
        $produtos = DB::select("SELECT * FROM produtos ORDER BY id");
        
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
        
        return redirect()->action('ProdutoController@listaProdutos')->withInput(Request::only("nome"));
    }

    public function excluirProduto() {
        $id = Request::route("id");

        DB::delete("DELETE FROM produtos WHERE id = ?", [$id]);
        
        return redirect()->action('ProdutoController@listaProdutos');
    }

    public function listaJson() {
        $produtos = DB::select('select * from produtos');
        return response()->json($produtos);
    }
}