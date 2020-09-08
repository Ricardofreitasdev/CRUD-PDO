<?php

require_once 'vendor/autoload.php';

$produto = new \app\model\Produto();
$produto->setId(2);
$produto->setNome("teste");
$produto->setDescricao("teste2");

$produtoDao = new \app\model\ProdutoDao();
$produtoDao->delete(2);

var_dump($produto);

foreach ($produtoDao->read() as $produto) {
    echo "<li>" . $produto['nome'] . " | " . $produto['descricao'] . "</li><hr>";
}
