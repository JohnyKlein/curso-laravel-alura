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
        
        return view("produto/adicionaProduto")->with('nome', $nome);
    }
}