6.12
<?php 
for ($i=0;$i<=2;$i++){
    $tab2[$i] = readline("Saisir une valeur ");
    $tab1[$i] = $tab2[$i] +1;
}  
foreach ($tab1 as $key => $value) {
    echo "$key => $value \n";
}
?>
