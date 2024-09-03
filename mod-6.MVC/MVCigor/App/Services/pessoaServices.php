<?php
//Para acessar esses dados, usaremos um outro ponto de entrada para nosso app
//chamado REST.PHP no diretório principal

class PessoaServices{

    public static function getData($request){

        $id_pessoa = $request['id'];

        Transaction::open('Framework');
        $pessoa = Pessoa::find ($id_pessoa);
        if ($pessoa){
            $pessoa_array = $pessoa->toArray();
       }else{

        throw new Exception("Pessoa {$id_pessoa} não encontrada");
       }
       Transaction::close();

    }

}