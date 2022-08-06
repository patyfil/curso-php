<?php

class Pessoa
{
    private $id;
    private $nome;
    private $nick;
    private $email;
    private $senha;
    private $foto;
    private $dataCadastro;
    private $publicacoes;
    private $amigos; //tipo Pessoa
    private $fone;
    private $cidade;
    private $estado;
    private $dataNasc;
    private $genero;

    public function __construct()
    {
        $this->publicacoes = [];
        $this->amigos = [];
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
        return $this; // interface fluente
    }

    public function getNick()
    {
        return $this->nick;
    }

    public function setNick($nick)
    {
        $this->nick = $nick;
        return $this;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    public function getSenha()
    {
        return $this->senha;
    }

    public function setSenha($senha)
    {
        $this->senha = $senha;
        return $this;
    }

    public function getFoto()
    {
        return $this->foto;
    }

    public function setFoto($foto)
    {
        $this->foto = $foto;
        return $this;
    }

    public function getDataCadastro()
    {
        return $this->dataCadastro;
    }

    public function setDataCadastro($dataCadastro)
    {
        $this->dataCadastro = $dataCadastro;
        return $this;
    }

    public function getPublicacoes()
    {
        return $this->publicacoes;
    }

    public function setPublicacoes($publicacoes)
    {
        $this->publicacoes = $publicacoes;
        return $this;
    }

    public function adicionarPublicacao($publicacao)
    {
        $this->publicacoes[] = $publicacao;
    }

    public function getAmigos()
    {
        return $this->amigos;
    }

    public function setAmigos($amigos) //lista (todos amigos)
    {
        $this->amigos = $amigos;
        return $this;
    }

    public function adicionarAmigo($amigo) //único amigo
    {
        $this->amigos[] = $amigo;
    }

    public function getFone()
    {
        return $this->fone;
    }

    public function setFone($fone)
    {
        $this->fone = $fone;

        return $this;
    }

    public function getCidade()
    {
        return $this->cidade;
    }


    public function setCidade($cidade)
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;

        return $this;
    }

    public function getDataNasc()
    {
        return $this->dataNasc;
    }

    public function setDataNasc($dataNasc)
    {
        $this->dataNasc = $dataNasc;

        return $this;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;

        return $this;
    }
}
