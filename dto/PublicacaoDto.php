<?php

class PublicacaoDto
{

    private $texto; 
    private $autor;
    private $foto;

    public function __construct($texto, $autor)
    {
        $this->texto = $texto;
        $this->autor = $autor;
    }

    public function getLogin()
    {
        return $this->texto;
    }

    public function getSenha()
    {
        return $this->autor;
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
}
