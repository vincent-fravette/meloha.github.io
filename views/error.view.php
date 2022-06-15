<?php
ob_start();
?>

<section class="error-page">
    <div class="wide-container padding-y padding-x">
        <h1>404&nbsp;&nbsp;&#124;&nbsp;&nbsp;<?= $err ?></h1>
        <p></p>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = "Erreur 404";
$body = "error";
require "views/template.view.php";
?>