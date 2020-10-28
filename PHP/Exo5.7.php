Exo 5.7 
<?php 
$p = 1;
$i = 1;

for ($i = 1; $i <= 3; $i++){ 
    $a = readline("Saisir un nb ");
    if ($i == 1){ 
        $max = $a;
    }elseif( $a > $max ){
        $max = $a;
        $p = $i;
    }        
}

    echo "le plus grand nombre est $max, la position est $p";        
?>

