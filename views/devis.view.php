

<form method="POST" action="<?= URL ?>comiti/validate" enctype="multipart/form-data">
    <div class="form-group mt-1">
        <label for="adh">Nombre d'adhérents </label>
        <input type="number" class="form-control" id="title" name="adh">
    </div>
    <div class="form-group mt-1">
        <label for="nbSec">Nombre de section </label>
        <input type="number" class="form-control" id="nbPages" name="nbSec">
    </div>
    <div class="form-group mt-1">
        <label for="fed">Fédération</label>
        <input type="text" class="form-control" id="nbPages" name="fed" placeholder="'N' = Natation, 'G'= Gymnastique, 'B' = BasketBall, autres...">
    </div>
    <button type="submit" class="btn btn-primary">Valider</button>
</form>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>





<?php
$title = "Devis";
$content = ob_get_clean();
require_once "template.view.php";