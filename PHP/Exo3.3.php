Exo 3.3
<?php
$a = "aligator";
$b = "brebis";
$c = "cheval";

if ($a < $b && $b < $c && $a < $c){                                     /* && = et */
    echo "$a, $b, $c sont classés dans l'ordre alphabetique";
}else{
    echo "$a, $b, $c ne sont pas classé dans l'ordre alphabétique";
}
?>
