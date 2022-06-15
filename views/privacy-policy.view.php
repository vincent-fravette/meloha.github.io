<?php
ob_start();
?>

<!------------------------- JUMBOTRON ------------------------->
<section class="jumbotron">
    <div class="main-container">
        <h1><span class="first-letter">M</span>eloha<br><span class="line-break"><span class="first-letter">P</span>olitique de confidentialité</span></h1>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = "Politique de confidentialité - Meloha";
$body = "privacy-policy";
require "views/template.view.php";
?>