<?php

use app\classes\Email;

    spl_autoload_register(function ($class) {

        // project-specific namespace prefix
        $prefix = 'app\\';
        // $prefix é como vai começar o namespace 
    
        // base directory for the namespace prefix
        $base_dir = __DIR__ . '/app/';
        // $base_dir é da onde será enviado as classes
    
        // does the class use the namespace prefix?
        $len = strlen($prefix);
        if (strncmp($prefix, $class, $len) !== 0) {
            // no, move to the next registered autoloader
            return;
        }
    
        // get the relative class name
        $relative_class = substr($class, $len);
    
        // replace the namespace prefix with the base directory, replace namespace
        // separators with directory separators in the relative class name, append
        // with .php
        $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';
    
        // if the file exists, require it
        if (file_exists($file)) {
            require $file;
        }
    });

    // $email = new app\classes\Email;
    // echo $email->send();

    $produto = new app\models\Produto;
    echo $produto->create();

?>