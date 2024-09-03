<?php
use Livro\Control\Page;
use Livro\Database\Transaction;
use Livro\Database\Repository;
use Livro\Database\Criteria;


        //Page oferece um recurso de método Show genérico
class CidadeControl extends Page
{
    public function listar()
    {
        try
        {   //abre transação com o banco de dados
            Transaction::open('livro');
            
            $criteria = new Criteria;
            $criteria->setProperty('order', 'id');
            
            $repository = new Repository('Cidade');
            $cidades = $repository->load($criteria);
            
            if ($cidades)
            {
                foreach ($cidades as $cidade)
                {
                    print "{$cidade->id} - {$cidade->nome} <br>";
                }
            }
            
            Transaction::close();
        }
        catch (Exception $e)
        {
            print $e->getMessage();
        }
    }
}
