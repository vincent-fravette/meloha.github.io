<?php

session_start();

date_default_timezone_set('Indian/Reunion');

define('ROOT_PATH', realpath(dirname(__FILE__, 2)).'/');

$jsonFile = file_get_contents(ROOT_PATH."json/prices.json");
$json = json_decode($jsonFile);
$services = $json->services; // tableau des prestations proposées

$jsonFile = file_get_contents(ROOT_PATH."json/description.json");
//$json = json_decode($jsonFile); // OBJECT
$json = json_decode($jsonFile, true); // ARRAYS
$description = $json;

function displayText($key) {
    global $benefits;
    $class = isset($benefits[$key]->text) ? "" : "d-none";
    echo $class;
}

function displaySubText($key) {
    global $benefits;
    $class = isset($benefits[$key]->subText) ? "" : "d-none";
    echo $class;
}

if ( isset($_GET['page']) ) {
    switch ( $_GET['page'] ) {
        case "epilation": $page = "epilation"; $id = 0;
        break;
        case "onglerie": $page = "onglerie"; $id = 1;
        break;
        case "brow-lift": $page = "brow_lift"; $id = 2;
        break;
        case "rehaussement": $page = "rehaussement"; $id = 2;
        break;
        case "lifting": $page = "lifting"; $id = 3;
        break;
        case "cryotherapie": $page = "cryotherapie"; $id = 3;
        break;
        case "soin-visage": $page = "soin_visage"; $id = 3;
        break;
        case "soin-corps": $page = "soin_corps"; $id = 3;
        break;
    }
}

require_once ROOT_PATH . "vendor/autoload.php";

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