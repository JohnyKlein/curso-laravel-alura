<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller {

    public function listaProdutos(){

        $produtos = DB::select("SELECT * FROM produtos");

        return view("produtos")->withProdutos($produtos);
    }

    public function detalhaProduto() {

        $produto = DB::select("SELECT * FROM produtos WHERE id = ?", [3]);

        return view("produtoDetalhe")->withProduto($produto[0]);
    }
}