<?php

Route::get("/", function(){
    return "<h1>Desculpe, página não encontada!</h1>";
});

Route::get("/produtos", "ProdutoController@listaProdutos");
Route::get("/produtos/detalhaProduto/{id}", "ProdutoController@detalhaProduto");
Route::get("/produtos/novoProduto", "ProdutoController@novoProduto");
Route::post("/produtos/adicionaProduto", "ProdutoController@adicionaProduto");
Route::get("/produtos/excluirProduto/{id}", "ProdutoController@excluirProduto");

Route::get("/produtos/json", "ProdutoController@listaJson");