Exo 5.8
<?php 
$p = 1;
$i = 1;

do {
    $a = readline(" Saisir un nb "); 
        if ($i == 1 || $a > $max){
           $max = $a;                                       /* max prend la valeur de a pour la bloquer */
           $p = $i;                                         /* p = position prend la valeur de i  */
           $i++; 
           }
           
        }while ($a != 0);
        echo "le plus grand nombre est $max, la position est $p";      
?>

