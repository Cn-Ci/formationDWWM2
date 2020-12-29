Exo 3.1
<?php 
$a = 5;
if ($a >= 0){
    echo "$a est positif ";
}else{
    echo "$a est negatif ";
}
?>

Exo 3.2
<?php
$a = 5;
$b = -9;

if ($a >= 0){
    echo "$a est positif ";
}else{
    echo "$a est negatif ";
}

if ($b >= 0){
    echo "$b est positif ";
}else{
    echo "$b est negatif ";
}
?>

Exo 3.3
<?php
$a = "aligator";
$b = "brebis";
$c = "cheval";

if ($a < $b && $b < $c && $a < $c){
    echo "$a, $b, $c sont classés dans l'ordre alphabetique";
}else{
    echo "$a, $b, $c ne sont pas classé dans l'ordre alphabétique";
}
?>

Exo 3.4
<?php 
$a = 0;
if ($a > 0){
    echo "$a est positif";
}elseif ($a < 0){
    echo "$a est negatif";
}else echo "$a est nul";
?>

Exo 3.5
<?php
$a = 4;
$b = 0;
if ($a > 0){
    echo "$a est positif ";
}elseif ($a < 0){
    echo "$a est negatif";
}else echo "$a est nul";
if ($b > 0){
    echo "$b est positif";
}elseif ($b < 0){
    echo "$a est negatif";
}else echo "$b est nul";
?> 

Exo 3.6
<?php
$a = 7;

if($a >= 12){
    echo 'cadet';
}else{
    if ($a >= 10){
        echo "minime";
    }else{
        if ($a >= 8){
            echo "pupille";
        }else{
            if ($a >= 6){
                echo "poussin";
            }else{
                echo "pas classe";
            }
        }
    }
}

