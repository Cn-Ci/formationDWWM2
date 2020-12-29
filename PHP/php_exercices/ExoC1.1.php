<?php
$mot = readline("Saisir un mot ");
if (ctype_upper($mot) || (ctype_lower($mot))) {
    echo "Le mot est correct";
}
elseif ((ctype_upper($mot[0])) && (ctype_lower(substr($mot,1)))) {
    echo "Le mot est correct";    
}
else {
    echo "Le mot n'est pas valide";
}