Exo 7
<?php
$somme = 0;
$max = 0;
$i = 0;


do {
    $nb = readline("Saisir un nb ");
    $somme = $somme + $nb;
    if ($nb == 0) {
        break; 
        }
    if ($nb > $max) {
        $max = $nb;
        }
        if ($i == 0 || $nb < $min)
        {
        $min = $nb;
        }
    $i++;
} while ($nb != 0);

$moyenne = $somme / ($i -1);

$op = readline("Saisir une opération somme , moyenne , max, min, quit \n");

switch ($op) {
    case "somme":
        echo $somme . " est la somme";
        break;
    case "moyenne":
        echo $moyenne . " est la moyenne de " . " = " . $somme . " / " . ($i -1);
        break;
    case "max":
        echo $max . "est le maximum";
        break;
    case "min":
        echo $min . "est le minimum" ;
        break;
    case "quit":
        echo "au revoir";
        break;
}
?>

