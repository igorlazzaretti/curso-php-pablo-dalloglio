/*
Aqui aprenderemos sobre get_class_methods, get_object_vars, get_parent_class, is_subclass_of


*/

<?php
class Funcionario
{
    function setSalario() {}
    function getSalario() {}
    function setNome() {}
    function getNome() {}
    function doMagic() {}
}
echo 'get_class_methods Classe Funcionario:';
echo "\n";
print_r(get_class_methods('Funcionario'));

class Funcionario2
{
    public $nome;
    public $salario;
}
$harry = new Funcionario2;
$harry->nome = 'Harry da Silva';
$harry->salario = 800;
echo 'Classe:' . get_class($harry);
print_r(get_object_vars($harry));

// get_class
class Estagiario extends Funcionario
{
    public $bolsa;
}
$gina = new Estagiario;
$gina->nome = 'Gina da Silva';
$percy = new Funcionario;

echo 'get_class gina: ';
print_r(get_class($gina));
echo "\n";
echo 'get_class percy: ';
print_r(get_class($percy));

//get_parent_class
echo "\n";
echo 'get_parent_class: Estagiário: ';
print_r(get_parent_class('Estagiario'));
echo "\n";
echo 'get_parent_class: $gina: ';
print_r(get_parent_class($gina));

//is_subclass_of
echo "\n";
echo 'sub_class_of: Estagiário: ';
//Estagiario é subclasse de Funcionáro? booleando true
var_dump(is_subclass_of('Estagiario', 'Funcionario'));

//method_exists

echo "\n";
echo 'method_existis: doMagin ou undoMagic' . "\n";
if (method_exists($gina, 'undoMagic')) {
    print $gina->nome . " tem o método undoMagic" . "\n";
} else {
    print $gina->nome . " não tem o método undoMagic" . "\n";
}
if (method_exists($percy, 'doMagic')) {
    print "Percy tem o método doMagic" . "\n";
} else {
    print "Percy não tem o método doMagic" . "\n";
}

//call_user_func / APENAS para funcoes globais
    // ele verifica se a função existe Parametro 1 
    // no Parametro 2 ele gera um parâmetro pra esse função

function nomear($p)
{
   echo "olá, meu nome é " . $p;
}

call_user_func('nomear', 'Ginyyy'); 