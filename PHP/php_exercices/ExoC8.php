Exo 8 
<?php
$sommei = 0;
$sommej = 0;

for ($i=0;$i<=1;$i++){
    $tabi[$i] = readline(" Saisir le nom de l'eleve i ");
    for ($j=0;$j<=2;$j++){
        $tabj[$j] = readline(" Saisir une note ");
            $sommej = $sommej + $tabj[$j];
       }
       $moyennej = $sommej / $j;
       echo " la moyenne de l'éleve $i est $moyennej";
       echo "\n";
}
?>
