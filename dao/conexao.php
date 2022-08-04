<?php

// namespace dao;
// singleton: padrão de projeto (criacional)
// 1 - único ponto de acesso ao recurso (static)
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
        if(!isset(self::$conexao)) { // Se não existir uma conexão, ele vai criar uma conexão.
            //Conexão com a porta
            // self::$conexao = new PDO("mysql:host=localhost;port=$port;dbname=fotoweb", "root", "");

            //Conexão sem a porta
            self::$conexao = new PDO('mysql:host=localhost;dbname=fotoweb;charset=utf8', 'root', '');
        } // Se existir uma conexão, então ele retorna a conexão.
        return self::$conexao;
    }

    function __clone() // reescrevendo
    {
        throw new Exception("Não se pode clonar um singleton!");
    }
}

