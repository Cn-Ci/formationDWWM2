<?php
$phrase = "";
function chiffredeCesar(&$phrase)
{   
    $phrase = strtoupper(readline("Entrez une phrase à coder : "));
    $alphabet = range('A','Z');
    $alphabetCle = array();
    $position = 0;
    //Remplir le tableau alphabetCle avec des lettre aléatoires
    for ($i=0; $i < 26; $i++) {
        $alphabetCle[$i] = strtoupper(readline("Entrez une lettre aléatoire : "));      
    }
    //Cherche la position de chaque lettre du mot dans l'alphabet et la remplace par celle de l'alphabetCle
    for ($i=0; $i < strlen($phrase); $i++) { 
        $position = array_search($phrase[$i], $alphabet);
        $phrase[$i] = $alphabetCle[$position];   
    }
    echo "La phrase codée est : ",$phrase;
}
echo chiffredeCesar($phrase);