<?php

class PublicacaoDao extends AbstractDao { 
//A class PublicacaoDao está herdando os atributos e métodos da class AbstractDao

    public function salvar($obj) {

        //sql inject: injeção de código sql - adicionar código malicioso
        $sql = "INSERT INTO Publicacao (PessoaID, PubArquivo, PubTexto, PubData) VALUES (?, ?, ?, ?)";
        //Statement
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $obj->getAutor(), PDO::PARAM_STR); 
        $st->bindValue(2, $obj->getFoto(), PDO::PARAM_STR);
        $st->bindValue(3, $obj->getTexto(), PDO::PARAM_STR);
        $data = new DateTime();
        // 26/07/2022 - Brasil
        // 2022-07-26
        $st->bindValue(4, $data->format("Y-m-d H:i:s"), PDO::PARAM_STR);
        $st->execute();

    }

    public function atualizar($obj) {

    }

    public function excluir($id)
    {
        $sql = "DELETE FROM Publicacao WHERE PubID = ?";
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $id, PDO::PARAM_INT);
        $st->execute();
    }

    public function publicar($dto)
    {

        $sql = "SELECT * FROM Publicacao WHERE PubTexto = ? AND PubArquivo = ? AND PessoaID = ?";
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $dto->getTexto(), PDO::PARAM_STR);
        $st->bindValue(2, $dto->getFoto(), PDO::PARAM_STR);
        $st->bindValue(3, $dto->getAutor(), PDO::PARAM_STR);

        $st->setFetchMode(PDO::FETCH_ASSOC);
        $st->execute();

        //$rs - resultset (guardar a projeção do BD)
        $rs = $st->fetch();

        if (empty($rs)) {
            // throw new Exception("Usuário ou senha incorretos!");
            throw new Exception("<script language=javascript>alert('Selecione uma Foto!');</script>");
        }

        $publicacao = new Publicacao($dto);
        $publicacao->setTexto($rs["PubTexto"]);
        $publicacao->setFoto($rs["PubArquivo"]);
        $publicacao->setData($rs["PubData"]);


        return $publicacao;
    }
}

						
