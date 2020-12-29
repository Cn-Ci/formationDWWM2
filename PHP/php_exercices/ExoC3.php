
Exo 3 
<?php 
function fact($a)
{
    $f = 1;
    for ($i = 1; $i <= $a; $i++){
        $f = $f * $i;
    }
    return $f;
}   
    $f = readline("Saisir un nb ");
    $a = fact($f);
    echo "la factorielle de $f est $a";
?>
