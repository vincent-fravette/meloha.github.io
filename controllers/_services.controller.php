<?php


if ( isset($_GET['page']) ) {
    switch ( $_GET['page'] ) {
        case "epilation": $page = "epilation"; $id = 0;
        break;
        case "onglerie": $page = "onglerie"; $id = 1;
        break;
        case "brow-lift": $page = "brow_lift"; $id = 2;
        break;
        case "rehaussement": $page = "rehaussement"; $id = 2;
        break;
        case "lifting": $page = "lifting"; $id = 3;
        break;
        case "cryotherapie": $page = "cryotherapie"; $id = 3;
        break;
        case "soin-visage": $page = "soin_visage"; $id = 3;
        break;
        case "soin-corps": $page = "soin_corps"; $id = 3;
        break;
    }
}


/*
echo '<pre>';
echo $page; echo "<br>-------------------<br>";
echo $id; echo "<br>-------------------<br>";
//print_r($description); echo "<br>-------------------<br>";
//print_r($description[$page]); echo "<br>-------------------<br>";
//print_r($description[$page]["benefits"]); echo "<br>-------------------<br>";
//print_r($description->onglerie->name); echo "<br>-------------------<br>";
print_r($services[$id]); echo "<br>-------------------<br>";
echo $_GET['page'];
echo '</pre>';
*/
?>