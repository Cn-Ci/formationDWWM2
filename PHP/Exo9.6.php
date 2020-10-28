Exo 9.6

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

 function chiffrer($tab){
    $alpha = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $comp= str_split($tab,1);
    $f= count($comp);
    for ($i=0; $i <$f; $i++){
        $pos= position($alpha,$comp[$i]);
        $v=$pos+1;
        
            if ($comp[$i]== "z" ) {
                $comp[$i]="a";
            }
            elseif ($comp[$i]=="Z"){
                $comp[$i]="A";
            }
            else $comp[$i]=$alpha[$v];
        }
     return print_r($comp);   
}
 

    $phrase = readline ("Saisissez une phrase ");
    

    echo chiffrer($phrase);
?>