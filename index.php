<?php
    require 'vendor/autoload.php';

    require 'app/classes/Email.php';

    $email = new Email;
    $email->send();

?>