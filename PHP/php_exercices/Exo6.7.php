Exo 6.7 
<?php 
$somme = 1;

for ($i=1;$i<=3;$i++){
    $note[$i] = readline(" Saisir une note ");
    $somme = $somme + $note[$i];
}   
foreach ($note as $key => $value) {
    echo " $key => $value \n";
}
    $moyenne = $somme/9;
echo "la moyenne est $moyenne"
?>
