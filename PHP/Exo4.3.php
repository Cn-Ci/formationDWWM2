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
