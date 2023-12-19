<?php

    require 'vendor/autoload.php';

    // $produto = new \app\models\Produto;
    // echo $produto->create();

<<<<<<< HEAD
    $produto = new asw\Search;
=======
    $produto = new asw\services\Search;   
>>>>>>> 39dc327d82656df44ca6bea583415dcb4dc1e599
    echo $produto->pesquisar();
?>