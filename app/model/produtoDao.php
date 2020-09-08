<?php

namespace app\model;


class ProdutoDao
{
    public function create(Produto $p)
    {
        $sql = 'INSERT INTO produtos (nome, descricao) VALUES (:n,:d)';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->bindValue(':n', $p->getNome());
        $stmt->bindValue(':d', $p->getDescricao());
        $stmt->execute();

    }
    public function read()
    {
        $sql = 'SELECT * FROM produtos';
        $stmt = Conexao::getConn()->prepare($sql);
        $stmt->execute();

        if($stmt->rowCount() > 0){
            $resultado = $stmt->fetchAll(\PDO::FETCH_ASSOC);
            return $resultado;
        } else {
            return [];
        }
    }
    public function update(Produto $p)
    {
    }
    public function delete($id)
    {
    }
}
