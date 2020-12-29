Exo 6.8 
<?php
$pos = 0;
$neg = 0;


for ($i=1;$i<=3;$i++){
    $tab[$i] = readline("Saisir une note ");
        if ($tab[$i] >0){
        $pos++;
            }if ($tab[$i] < 0){
            $neg++;   
        }
        echo "il y a $pos de nb positif ";
        echo "il y a $neg de nb negatif ";
}
?>
