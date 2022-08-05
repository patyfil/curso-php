<?php

// $mensagem = '';
// if ($mensagem != '') :
//     $mensagem = '<ul>' . $mensagem . '</ul>';
//     echo "<div class='alert alert-danger' role='alert'>" . $mensagem . "</div> ";
//     exit;
// endif;

// if ($dataNasc == '') :
//     $mensagem .= '<li>Favor preencher a Data de Nascimento.</li>';
// else :
//     $data = explode('/', $dataNasc);
//     if (!checkdate($data[1], $data[0], $data[2])) :
//         $mensagem .= '<li>Formato da Data de Nascimento inválido.</li>';
//     endif;
//     // Constrói a data no formato ANSI yyyy/mm/dd
//     $data_temp = explode('/', $dataNasc);
//     $data_ansi = $data_temp[2] . '/' . $data_temp[1] . '/' . $data_temp[0];
// endif;

class PessoaDao extends AbstractDao
{ //A class PessoDao está herdando os atributos e métodos da class AbstractDao

    public function salvar($obj)
    {

        //sql inject: injeção de código sql - adicionar código malicioso
        $sql = "INSERT INTO pessoa (PessoaNome, PessoaNick, PessoaEmail, PessoaFoto, PessoaSenha,  
        PessoaFone, PessoaCidade, PessoaEstado, PessoaGenero, PessoaDataNasc, PessoaDataCad) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        //Statement
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $obj->getNome(), PDO::PARAM_STR);
        $st->bindValue(2, $obj->getNick(), PDO::PARAM_STR);
        $st->bindValue(3, $obj->getEmail(), PDO::PARAM_STR);
        $st->bindValue(4, $obj->getFoto(), PDO::PARAM_STR);
        $st->bindValue(5, $obj->getSenha(), PDO::PARAM_STR);
        $st->bindValue(6, $obj->getFone(), PDO::PARAM_STR);
        $st->bindValue(7, $obj->getCidade(), PDO::PARAM_STR);
        $st->bindValue(8, $obj->getEstado(), PDO::PARAM_STR);
        $st->bindValue(9, $obj->getGenero(), PDO::PARAM_STR);
        // 26/07/2022 - Brasil
        // 2022-07-26
        $data = new DateTime();
        $dataNasc = new DateTime();
        $st->bindValue(10, $dataNasc->format("Y-m-d"), PDO::PARAM_STR);
        $st->bindValue(11, $data->format("Y-m-d H:i:s"), PDO::PARAM_STR);
        $st->execute();

        // function checkValidDate($date, $format = "dd-mm-yyyy")
        // {
        //     if ($format === "dd-mm-yyyy") {
        //         $day = (int) substr($date, 0, 2);
        //         $month = (int) substr($date, 3, 2);
        //         $year = (int) substr($date, 6, 4);
        //     } else if ($format === "yyyy-mm-dd") {
        //         $day = (int) substr($date, 8, 2);
        //         $month = (int) substr($date, 5, 2);
        //         $year = (int) substr($date, 0, 4);
        //     }

        //     return checkdate($month, $day, $year);
        // }
        

        // if ($st->execute()) {
        //     if ($st->rowCount() > 0) {
        //         echo "Cadastro efetuado com sucesso!";
        //     } else {
        //         echo "Não foi possível fazer o cadastro.";
        //     }
        // } else {
        //     throw new PDOException("Erro: Não foi possível executar a declaração SQL");
        // }
    }

    public function atualizar($obj)
    {
    }

    public function excluir($id)
    {
        $sql = "delete from Pessoa where PessoaID = ?";
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $id, PDO::PARAM_INT);
        $st->execute();
    }

    public function logar($dto)
    {

        // $sql = "select * from Pessoa where PessoaNick = ? and PessoaSenha = ?";
        $sql = "select * from Pessoa where (PessoaEmail OR PessoaNick)=? AND PessoaSenha= ?";
        $st = $this->conexao->prepare($sql);
        $st->bindValue(1, $dto->getLogin(), PDO::PARAM_STR);
        $st->bindValue(2, $dto->getSenha(), PDO::PARAM_STR);
        $st->setFetchMode(PDO::FETCH_ASSOC);
        $st->execute();

        //$rs - resultset (guardar a projeção do BD)
        $rs = $st->fetch();

        if (empty($rs)) {
            // throw new Exception("Usuário ou senha incorretos!");
            throw new Exception("<script language=javascript>alert('Usuário e/ou senha inválido(s), Tente novamente!');</script>");

        }

        $pessoa = new Pessoa;
        $pessoa->setNome($rs["PessoaNome"]);
        $pessoa->setNick($rs["PessoaNick"]);
        $pessoa->setEmail($rs["PessoaEmail"]);
        $pessoa->setFoto($rs["PessoaFoto"]);
        $pessoa->setDataCadastro($rs["PessoaDataCad"]);

        return $pessoa;
    }
}
