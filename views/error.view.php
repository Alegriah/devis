<!-- Ma page d'erreur -->
<p><?=$error?></p>
<?php
$title = "Page d'erreur";
$content = ob_get_clean();
require_once "template.view.php";