<?php 

class PublicacaoDao extends AbstractDao {

    public function salvar($obj) {

        //sql inject: injeção de código sql - adicionar código malicioso
        $sql = "insert into Publicacao (PublicacaoAutor, PublicacaoFoto, PublicacaoTexto, PublicacaoCurtidas) values (?, ?, ?, ?)";
        //Statement
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $obj->getAutor()->getId(), PDO::PARAM_INT); 
        $st->bindValue(4, $obj->getFoto(), PDO::PARAM_STR);
        $st->bindValue(2, $obj->getTexto(), PDO::PARAM_STR);
        $st->bindValue(3, $obj->getCurtidas(), PDO::PARAM_STR);

        $data = new DateTime();

        // 26/07/2022 - Brasil
        // 2022-07-26

        $st->bindValue(6, $data->format("Y-m-d H:i:s"), PDO::PARAM_STR);
        $st->execute();

    }

    public function atualizar($obj) {

    }

    public function excluir($id)
    {
        $sql = "delete from Publicacao where PublicacaoID = ?";
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $id, PDO::PARAM_INT);
        $st->execute();
    }
}