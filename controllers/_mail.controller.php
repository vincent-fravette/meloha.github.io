<?php

if ( empty($_POST['domiel']) ) {

    $error = false;
    $alert = null;
    $subjects = array(1 => "Informations", "Réservations");

    if ( array_key_exists('name', $_POST) ) {
        $name = substr( strip_tags($_POST['name']), 0, 50 );
    } else {
        $error = true;
        $alert = "Entrer votre prénom et nom.";
    }

    if ( array_key_exists('email', $_POST) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ) {
        $email = $_POST['email'];
    } else {
        $error = true;
        $alert = "Entrer un email valide.";
    }

    if ( array_key_exists('subject', $_POST) && array_key_exists($_POST['subject'], $subjects) ) {
        $subject = $subjects[$_POST['subject']];
    } else {
        $error = true;
        $alert = "Choisir un objet";
    }

    if ( array_key_exists('message', $_POST) ) {
        $message = substr( strip_tags($_POST['message']), 0, 50 );
    } else {
        $error = true;
        $alert = "Entrer votre message";
    }

    if ( !$error ) {

        $to = 'meloha.care@gmail.com';
        
        $transport = (new Swift_SmtpTransport('0.0.0.0', 1025))  //TLS
        //->setUsername('contact@jpcr.re')
        //->setPassword('contactjpcr')
        ;

        $mailer = new Swift_Mailer($transport);

        $mail = (new Swift_Message())
        ->setSubject($subject)
        ->setFrom([$email => $name])
        ->setTo($to)
        ->setBody($message);

        if ( $mailer->send($mail) ) {
            echo "Envoyé\n";
        } else {
            echo "Echec\n";
        }

    }

} else {

    header($_SERVER["SERVER_PROTOCOL"]." 405 Method Not Allowed", true, 405);
    exit;
    $tran = (new Swift_SmtpTransport('0.0.0.0', 1025));

}

?>