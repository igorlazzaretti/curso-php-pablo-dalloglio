<?php
//2
require_once 'Lib/Livro/Core/ClassLoader.php';
$al= new Livro\Core\ClassLoader;
$al->addNamespace('Livro', 'Lib/Livro');
$al->register();

require_once 'Lib/Livro/Core/AppLoader.php';
$al= new Livro\Core\AppLoader;
$al->addDirectory('App/Control');
$al->addDirectory('App/Model');
$al->register();



// 1 verifica se existe a superglobal Get e buscamos nela a info da classe


if ($_GET){
    $class = $_GET['class'];

    //se existir, execute
    if (class_exists($class)){
        //o new precisa carregar com autoloader que está no inicio do código
        $pagina = new $class;
        //método padronizado show
        $pagina->show();
    }
}


?>