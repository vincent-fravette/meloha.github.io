<?php

define( 'URL', str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']) );

//require "controllers/autoload.controller.php";
require "controllers/_autoload.controller.php";

try {
    if ( empty($_GET['page']) ) {
        require "views/homepage.view.php";
    } else {
        $url = explode( "/", filter_var($_GET['page']), FILTER_SANITIZE_URL );
        switch ( $url[0] ) {
            case "accueil": require "views/homepage.view.php";
            break;
            case "tarifs": require "views/prices.view.php";
            break;
            case "mentions-legales": require "views/legal-notice.view.php";
            break;
            case "politique-confidentialite": require "views/privacy-policy.view.php";
            break;
            case "epilation": require "views/services.view.php";
            break;
            case "onglerie": require "views/services.view.php";
            break;
            case "brow-lift": require "views/services.view.php";
            break;
            case "rehaussement": require "views/services.view.php";
            break;
            case "lifting": require "views/services.view.php";
            break;
            case "cryotherapie": require "views/services.view.php";
            break;
            case "soin-visage": require "views/services.view.php";
            break;
            case "soin-corps": require "views/services.view.php";
            break;
            default: throw new Exception("Not found");
        }
    }
}
catch (Exception $e) {
    $err = $e->getMessage();
    require "views/error.view.php";
}

?>