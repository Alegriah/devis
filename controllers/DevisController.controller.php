<!-- Mon controller pour les fonctions -->
<?php
class DevisController
{
    //Cette fonction sert simplement à appeler la vue du formulaire
    public function displayQuotation()
    { 
        require "views/devis.view.php";
    }

    //La fonction pour l'algorithme de l'exercice
    public function validateDevis(){
        //Je fais en sorte de séparer l'algorithme je stock mes input (POST) dans des sessions pour les récupérer dans une autre fonction
        //Je les stock ici dans des variable que ce soit plus court.
     
        if(!empty($_POST['adh']) && !empty($_POST['fed'])){
            $_SESSION['adh'] = $_POST['adh'];
            $_SESSION['nbSec'] = $_POST['nbSec'];
            $_SESSION['fed'] = $_POST['fed'];
            $adherent= $_SESSION['adh'];
            $federation = $_SESSION['fed'];
            header("Location: " . URL . "comiti/total");
               //Je fais ensuite mes calculs selon le contexte et je redirige vers le total si tout est renseigné (sauf pour les sections pour qu'elle puisse être nulle) sinon vers l'accueil
            if($federation=='B'){
                $sections =  $_SESSION['nbSec']*5/1.30;
            }else{
                $sections =  $_SESSION['nbSec']*5;
            }
            if($adherent >= 0 && $adherent <= 100){
                $prix = 10;
                $_SESSION['calcul'] = ($prix+$sections)*1.2;
            }elseif($adherent >= 101 && $adherent <= 200){
                $prix = 0.10;
                if($federation=='G'){
                    $_SESSION['calcul'] = (($prix*$adherent/1.15)+$sections)*1.2;
                }else{
                    $_SESSION['calcul'] = $prix*$adherent+$sections;
                }
               
            }elseif($adherent >= 201 && $adherent <= 500){
                if($federation=='G'){
                    $prix = 0.9 ;
                }else{
                    $prix = 0.9;
                }
                
                $_SESSION['calcul'] = (($prix*$adherent)+$sections)*1.2;
            }elseif($adherent >= 501 && $adherent <= 1000){
                if($federation=='G'){
                    $prix = 0.8;
                }else{
                    $prix = 0.8;
                }
                $_SESSION['calcul'] = (($prix*$adherent)+$sections)*1.2;
            }elseif($adherent > 1000){
                $prix= 1000;
                $_SESSION['calcul'] = ($prix+$sections)*1.2;
                $_SESSION['freesection'] = 1;
            } 
        }else{
            header("Location: " . URL . "accueil");

        }
    }

    //J'affiche maintenant le résultat selon les conditions, je destroy ensuite les sessions pour les réinitialisé pour que ça n'impacte pas si l'utilisateur refait le formulaire
    //J'appelle aussi ma vue.
    public function displayDevis()
    {
       if(!empty($_SESSION['freesection'])){
        echo 'Vous devez payer '.number_format($_SESSION['calcul'],2).' euros /mois TTC + une section offerte !';
       }elseif($_SESSION['fed'] == 'N'){
        echo 'Vous devez payer '.number_format($_SESSION['calcul'],2) .' euros /mois TTC + trois sections offertes !';
       
       }else{
        echo 'Vous devez payer '.number_format($_SESSION['calcul'],2) .' euros /mois TTC';
       }
       session_destroy();
        require "views/total.view.php";
    }
    
}