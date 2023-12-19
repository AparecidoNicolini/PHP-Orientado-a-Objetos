<?php

    require 'vendor/autoload.php';

    // $produto = new \app\models\Produto;
    // echo $produto->create();

    $produto = new asw\Search;
    echo $produto->pesquisar();
?>