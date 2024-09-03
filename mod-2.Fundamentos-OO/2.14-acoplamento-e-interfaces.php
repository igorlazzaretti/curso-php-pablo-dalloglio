<?php


//
class Produto{
    private $descricao;
    private $preco;

    public function __construct($descricao, $preco){
        $this->descricao = $descricao;
        $this->preco = $preco;
    }
    public function getPreco(){
       return $this->preco;
    }
}

// A classe orçamento será composta por pelos produtos
class Orcamento{
    private $itens;
                        //'Produto' antes do Parametro força o código
                        // a passar apenas objetos da classe produto.
    public function adiciona(Produto $produto, $qtde){
        $this->itens[] = [$produto, $qtde];
    }
    public function calculaTotal(){
        $total = 0;
        foreach($this->itens as $item){
            $total += ($item[0]->getPreco() * $item[1]);
        }
        return $total;
    }
}

// Agora iremos criar itens no Orçamento

$orc = new Orcamento;
$orc->adiciona( new Produto ('Livro: Meu Eu Mágico de Gilderoy Lockhart',99.99),1);
$orc->adiciona( new Produto ('Caixa com Sapos de Chocolate', 30),2);
$orc->adiciona( new Produto ('Varinha', 240.50),2);
$orc->adiciona( new Produto ('Caldeirão de Estanho - Tamanho 2', 120),1);
$orc->adiciona( new Produto ('Uniforme Escolar Completo', 429.99),1);


print $orc->calculaTotal();
echo "\n";
var_dump($orc);    


?>