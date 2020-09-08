<?php

require_once 'vendor/autoload.php';

$produto = new \app\model\Produto();
$produto->setNome("celular");
$produto->setDescricao("muito bom");

$produtoDao = new \app\model\ProdutoDao();

foreach ($produtoDao->read() as $produto) {
    echo "<li>". $produto['nome']." | ".$produto['descricao']."</li><hr>";
}

