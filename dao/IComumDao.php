<?php

//DAO - Data Access Object
interface IComumDao { //padronizar (defini um contrato)

    //CRUD - Operações
    //Create = criar (salvar) - OK
    //Read = ler (buscar) (nesse caso, ler não é comum a todos)
    //Update = atualizar - OK
    //Delete = apagar (excluir) - OK

    //operações (definições)
    public function salvar($obj);
    public function atualizar($obj);
    public function excluir($id);

}

