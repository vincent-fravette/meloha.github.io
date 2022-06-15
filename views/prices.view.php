<?php
ob_start();
?>

<section class="jumbotron">
    <div class="main-container">
        <h1><span class="first-letter">M</span>eloha<br><span class="line-break"><span class="first-letter">T</span>arifs</span></h1>
    </div>
</section>
<section class="prices">
    <div class="main-container padding-x">
        <?php foreach ($services as $key => $value): ?>
        <svg class="divider mt-0" x="0px" y="0px" viewBox="0 0 61 6">
            <line class="st0" x1="60.5" y1="2.45" x2="58.11" y2="5.5"/>
            <line class="st0" x1="59.64" y1="0.5" x2="55.72" y2="5.5"/>
            <line class="st0" x1="57.3" y1="0.5" x2="53.39" y2="5.5"/>
            <line class="st0" x1="55.04" y1="0.5" x2="51.12" y2="5.5"/>
            <line class="st0" x1="52.71" y1="0.5" x2="48.79" y2="5.5"/>
            <line class="st0" x1="50.49" y1="0.5" x2="46.57" y2="5.5"/>
            <line class="st0" x1="48.09" y1="0.5" x2="44.18" y2="5.5"/>
            <line class="st0" x1="45.73" y1="0.5" x2="41.82" y2="5.5"/>
            <line class="st0" x1="43.51" y1="0.5" x2="39.59" y2="5.5"/>
            <line class="st0" x1="41.12" y1="0.5" x2="37.2" y2="5.5"/>
            <line class="st0" x1="38.78" y1="0.5" x2="34.87" y2="5.5"/>
            <line class="st0" x1="36.52" y1="0.5" x2="32.6" y2="5.5"/>
            <line class="st0" x1="34.19" y1="0.5" x2="30.28" y2="5.5"/>
            <line class="st0" x1="31.97" y1="0.5" x2="28.05" y2="5.5"/>
            <line class="st0" x1="29.58" y1="0.5" x2="25.66" y2="5.5"/>
            <line class="st0" x1="27.24" y1="0.5" x2="23.33" y2="5.5"/>
            <line class="st0" x1="24.98" y1="0.5" x2="21.06" y2="5.5"/>
            <line class="st0" x1="22.61" y1="0.5" x2="18.69" y2="5.5"/>
            <line class="st0" x1="20.39" y1="0.5" x2="16.47" y2="5.5"/>
            <line class="st0" x1="17.99" y1="0.5" x2="14.08" y2="5.5"/>
            <line class="st0" x1="15.66" y1="0.5" x2="11.74" y2="5.5"/>
            <line class="st0" x1="13.39" y1="0.5" x2="9.48" y2="5.5"/>
            <line class="st0" x1="11.07" y1="0.5" x2="7.15" y2="5.5"/>
            <line class="st0" x1="8.85" y1="0.5" x2="4.93" y2="5.5"/>
            <line class="st0" x1="6.45" y1="0.5" x2="2.54" y2="5.5"/>
            <line class="st0" x1="0.5" y1="5.12" x2="4.12" y2="0.5"/>
            <line class="st0" x1="0.5" y1="2.23" x2="1.85" y2="0.5"/>
        </svg>
        <div class="service-name">
            <h2><?= $services[$key]->name ?></h2>
            <div class="service-price">
                <?php $prices = $services[$key]->prices; foreach ($prices as $key => $value): ?>
                <div class="service-for">
                    <h3><?= $prices[$key]->for ?></h3>
                    <?php $benefits = $prices[$key]->benefits; foreach ($benefits as $key => $value): ?>
                    <div class="service-benefit">
                        <p>
                            <?= $benefits[$key]->name ?><br>
                            <span class="<?php displayText($key); ?>"><?= $benefits[$key]->text ?><br></span>
                            <span class="asterisk <?php displaySubText($key); ?>"><?= $benefits[$key]->subText ?></span>
                        </p>
                        <p><?= $benefits[$key]->price ?></p>
                    </div>
                    <?php endforeach ?>
                </div>
                <?php endforeach ?>
            </div>
            <p class="<?= isset($services[$key]->note) ? "note":"" ?>"><strong><?= isset($services[$key]->note) ? $services[$key]->note:"" ?></strong></p>
        </div>
        <?php endforeach ?>
    </div>
</section>

<?php
$content = ob_get_clean();
$title = "Tarifs - Meloha";
$body = "prices";
require "views/template.view.php";
?>