Exo 4.2
<?php
$h = 14;
$m = 23;
$m = $m + 1;

if( $m < 59 ){                                          /* Si minute est inferieur a 59 */

    $m = $m + 1;                                        /* 24 = 23 +1  */

}elseif($m == 0 && $h == $h +1){                        /* sinon si minutes = 0 et que l'on rajoute une heure */

    if($h < 23){                                        /* si heure est inferieur a 23  */
        $h = 0;                                         /* lheure ne change pas */
    }
}

echo "dans une minute il sera $h h et $m minutes";
?>

