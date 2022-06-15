<?php
ob_start();
?>

<!------------------------- JUMBOTRON ------------------------->
<section class="jumbotron">
    <div class="main-container">
        <h1><span class="first-letter">M</span>eloha<br><span class="line-break"><span class="first-letter">M</span>entions légales</span></h1>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = "Mentions légales - Meloha";
$body = "legal-notice";
require "views/template.view.php";
?>