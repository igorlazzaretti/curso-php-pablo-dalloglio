<?php
//teste para listar alguns usuários

//usaremos classes já criadas
use Framework\Database\Transaction;
use Framework\Database\Repository;
use Framework\Database\Criteria;

//declaar com o respectivo namespace

class PessoaControl{
    //método para listar Registros:
    public function listar(){
        //try catch é um controle de excessões
        try{
            //abrimos transação com base Framework
            Transaction::open('Framework');
            //fazemos o carregamnto de registros
            $criteria = new Criteria;
            //definimos a ordem para trazer os registros por id
            $criteria->setProperty('order', 'id');

            //manipulamos classe de repositório para manipular o registro de Pesssoa
            $repository = new Repository('Pessoa');
            //criamos um vetor de objetos da classe Pessoa
            $pessoas = $repository->load($criteria);
             if($pessoas){
                foreach($pessoas as $pessoa){
                    print "{$pessoa->id} - {$pessoa->nome}" . "\n";
                }

             }
            //fechamos essa transação
            Transaction::close();

        } catch (Exception $e){
            print $e->getMessage();
        }
}

public function show( $param ){

    if (isset($param['method']) AND $param['method'] == 'listar'){
        $this->listar();
    }
}

?>
// não devemos criar a classe e usa-la no mesmo arquivo