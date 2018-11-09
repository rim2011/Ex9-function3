<?php
function tabPairImpair($tab)
{
    $tabPair = array();
    $tabImpair = array();
    foreach ($tab as $n) {
        echo $n;
                if ($n % 2==0) {
                    array_push($tabPair,$n);

                }
                else {
                    array_push($tabImpair,$n);
                }

    }
    echo '<br> les elts paires sont: ';
    foreach ($tabPair as $k) {
        echo $k;
    }
    echo'<br> les els impaires sont: ';
    foreach ($tabImpair as $l) {
        echo $l;
    }

}
echo tabPairImpair([1,4,6,7,9,8]);