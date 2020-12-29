Exo 9.3 
<?php
 function countWord($string){
    return str_word_count($string);
}
$phrase = readline(" Saisir une phrase ");
echo countWord($phrase);
?>
