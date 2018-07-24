<?php

Route::get("/", function(){
    return "<h1>Desculpe, página não encontada!</h1>";
});

Route::get("/produtos", "ProdutoController@listaProdutos");
Route::get("/produtos/detalhaProduto", "ProdutoController@detalhaProduto");
