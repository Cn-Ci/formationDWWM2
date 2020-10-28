Exo 6 
<?php
    $j = readline("Saisir un n° jour (01 - 31) ");
    $m = readline("Saisir un n° mois (01 - 12) ");
    $a = readline("Saisir un n° année ( XXXX )");

echo $j . "/" . $m . "/" . $a . " ";

    function bissextile($a) {
        if( (is_int($a%4 == 0)) && (!is_int($a%100 > 0)) || (is_int($a%400 == 0)) ) { 
            echo "$a est bis ";
            return TRUE;
        } else {
            echo "$a n'est pas bis ";
            return FALSE;
        }
    }

    if ( ($j > 31 || $m > 12) || $m == 2 && (bissextile($a) && $j>29) || (!bissextile($a) && $j>28) || ($m == 4 || $m == 6 || $m == 9 || $m == 11 && $j > 30)){
        echo "date non valide";
        } else {echo "date valide";
        }
?>

