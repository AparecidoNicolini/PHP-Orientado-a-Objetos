<?php

    require 'vendor/autoload.php';

    // $produto = new \app\models\Produto;
    // echo $produto->create();

    $produto = new asw\services\Search;
    echo $produto->pesquisar();
?>