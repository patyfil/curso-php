<?php

class Publicacao
{
    private $id;
    private $autor; //tipo Pessoa
    private $data;
    private $foto;
    private $texto;
    private $curtidas; //lista de pessoas que curtiram

    public function __construct($autor)
    {
        $this->autor = $autor;
        $this->curtidas = [];
    }
    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    public function getAutor()
    {
        return $this->autor;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
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

    public function getTexto()
    {
        return $this->texto;
    }

    public function setTexto($texto)
    {
        $this->texto = $texto;
        return $this;
    }

    public function getCurtidas()
    {
        return $this->curtidas;
    }

    public function adicionarCurtida($curtida)
    {
        $this->curtidas[] = $curtida;
    }

    public function getTotalCurtida()
    {
        return sizeof($this->curtidas); //quantidade de curtidas
    }
}


/*
* public - fará com que não haja ocultação nenhuma, toda propriedade ou método declarado com public 
serão acessíveis por todos que quiserem acessá-los, 
utiliza-se public para os métodos de interface, isso é, 
as operações que queremos que outros possam executar em nossos objetos. 

* Private: Ao contrário do public, esse modificador faz com que qualquer método ou propriedade 
seja visível só e somente só pela classe que a declarou, 
ninguém terá acesso a essas propriedades ou métodos diretamente, 
o acesso será possível somente através de métodos de interface. 

* Protected: A visibilidade protegida é como um mix da pública com a privada. 
A visibilidade protected faz com que todos os herdeiros vejam as propriedades ou métodos protegidos 
como se fossem públicos porém, do lado de fora, um outro objeto não conseguirá acessar diretamente 
essas informações já que, do lado de fora é como se fosse privada. 

*/