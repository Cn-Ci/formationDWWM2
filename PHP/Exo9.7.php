Exo 9.7
<?php
function position($alpha, $a){
    $tabAlpha= str_split($alpha,1);
    $n= count($tabAlpha);
    for ($i=0; $i<$n; $i++) {
       if ($tabAlpha[$i]==$a){
           return $i;
       } 
   }return -1;
}

function chiffrer($tab, $b){
    $alpha = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $comp= str_split($tab,1);
    $f= count($comp);
    for ($i=0; $i <$f; $i++){
        $pos= position($alpha,$comp[$i]);
        $v=($pos+$b)%26; 
        $comp[$i]= $alpha[$v];          
    }
    return print_r($comp);
}

$phrase =readline("Saisir une phrase : ");
$d = readline("Quel décalage souhaitez vous ? ");

echo chiffrer($phrase,$d);

?>