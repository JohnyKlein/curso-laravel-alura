<?php namespace estoque\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Request;

class ProdutoController extends Controller {

    public function listaProdutos(){
        $produtos = DB::select("SELECT * FROM produtos");
        return view("produtos")->withProdutos($produtos);
    }

    public function detalhaProduto() {
        $id = Request::input("id", "1");
        $produto = DB::select("SELECT * FROM produtos WHERE id = ?", [$id]);
        return view("produtoDetalhe")->withProduto($produto[0]);
    }
}