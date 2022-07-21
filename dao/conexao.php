<?php

// singleton: padrão de projeto (criacional)
// 1 - único ponto de acesso ao recurso
// 2 - o recurso estará disponível para todos os componentes
// 3 - restringir a criação

// mecanismo 00: Herança

class Conexao { // stdClass
    private static $conexao = null;

    private function __construct()
    {
        
    }

    // static = é da classe
    public static function getConnection() {
        if(!isset(self::$conexao)) {
            self::$conexao = new PDO("mysql:host=localhost;dbname=fotoweb", "root", "");
        }
        return self::$conexao;
    }

    function __clone() // reescrevendo
    {
        throw new Exception("Não se pode clonar um singleton!");
    }
}

