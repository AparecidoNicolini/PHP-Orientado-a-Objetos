<?php 

    class Email extends PHPMailer{
        public function send() {
            return 'Enviar email';
        }
    }
?>

<!-- Podemos colocar o extends para herdar PHP Mailer, ou então chamar 
em uma função publica dentro de Email

Ex. public function () {

}

-->