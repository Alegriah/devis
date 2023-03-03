<?php
//Je start une session pour pouvoir stocker mes données 
session_start();
//Je définis la racine de mon site
define("URL", str_replace("index.php", "", (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[PHP_SELF]"));
//J'appelle mon controller et j'en fait une variable pour pouvoir me servir des fonctions
require_once "controllers/DevisController.controller.php";
$devisController = new DevisController();

//Je fais un try catch pour les routes de mon application
try {
    if(isset($_GET['page'])){
        $url = explode("/", filter_var($_GET['page']), FILTER_SANITIZE_URL);
    }
    // si GET page est vide on redirige vers l'accueil
    if (empty($url[0])) {
        require "views/accueil.view.php";
    } else {
        //switch de GET page pour savoir vers quelle page renvoyer l'utilisateur
        switch ($url[0]) {
            case "accueil":
                require "views/accueil.view.php";
                break;
            case "comiti":
                if (empty($url[1])) {
                } else if ($url[1] === "devis") {
                    $devisController -> displayQuotation();
                } else if ($url[1] === "total") {
                    $devisController -> displayDevis();
                } else if ($url[1] === "validate") {
                    $devisController ->validateDevis();
                }else{
                    throw new Exception("La page n'existe pas");
                }
                break;
                default :   throw new Exception("La page n'existe pas");
        }
    }
} catch (Exception $e) {
    $error = $e->getMessage();
     require "views/error.view.php";
}
