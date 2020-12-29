Exo 6.3 
<?php

for ($i=1;$i<=3;$i++){
    $note[$i] = readline("Saisir une note ");               
} 
foreach ($note as $key => $value) {         /* tableau indique i et la valeur */         
    echo "$key => $value \n";
}
?>

