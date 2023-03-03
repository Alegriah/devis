
<div class="container">
    <div class="accordion">
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Nous vous proposons aujourd'hui un devis personalisé en ligne
                </button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Un devis  <code>simple</code> et  <code>rapide</code></p> 
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Un devis pour votre club
                </button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample" >
                <div class="accordion-body">
                    <p>Un conseiller vous rappelera pour vous <code>aider</code>   dans vos projets</p> 
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Et ne plus avoir peur de l'inconnu
                </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse " aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                <div class="accordion-body">
                    <p>Nous nous engageons à être 100% <code>transparents </code> avec vous !</p>
                </div>
            </div>
        </div>
    </div>
    <h3 class="phpSkill">Chance de colaborer avec nous à la fin de ce devis</h3>
    <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated bg-danger" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 100%;">100 %</div>
    </div>
</div>

<?php
$title = "Accueil";
$content = ob_get_clean();
require_once "template.view.php";
