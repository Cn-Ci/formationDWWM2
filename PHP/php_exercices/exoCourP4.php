Exo 4.1 
<?php 
$tutu = 2;
$toto = 5;
$tata  = "ok";
if ( ($tutu > $toto + 4) || ($tata == "ok") ) {
      $tutu = $tutu +1;
    }else{
        $tutu = $tutu - 1;
    }
    echo $tutu;
?>

<?php 
$tutu = 2;
$toto = 5;
$tata  = "ok";
if ( ($tutu - 4 > $toto) || ($tata != "ok") ) {
      $tutu = $tutu - 1;
    }else{
        $tutu = $tutu + 1;
    }
    echo $tutu;
?>

Exo 4.2
<?php
$h = 14;
$m = 23;
$m = $m + 1;

if( $m < 59 ){

    $m = $m + 1;

}elseif($m == 0 && $h == $h +1){

    if($h < 23){
        $h = 0;
    }
}

echo "dans une minute il sera $h h et $m minutes";
?>

Exo 4.3 
<?php 
$h = 18;
$m = 32;
$s = 07;

if ($s < 59){
    $s = $s + 1;
}elseif($s = 0){
        if( $m < 59){
            $m = $m + 1;
            }elseif ($m = 0);
                if ($h < 23) {
                    $h = 0;
                }elseif ($h = $h +1);
            }

echo "dans une seconde, il sera $h h, $m minutes et $s secondes";
?>        

Exo 4.4 
<?php 
$q = 68;
 
if ($q <= 10){
    $p = $q * 0.10;
        }elseif($q <= 30){
        $p = ($q -10) *0.09 + (10 * 0.10);
            }elseif( $p = ($q - 30) * 0.08 + (10 * 0.10) + (20 * 0.09));

echo "le prix est $p";
?>

Exo 4.5
<?php
$s = "homme";
$a = 25;

if($s == "homme" && $a >= 20 || $s == "f" && $a >= 18 && $a <= 35){

echo "imposable";

}else{echo "non imposable";
}

