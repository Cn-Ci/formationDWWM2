EXo 9.10 
<?php

function pair($nb){
    if ( $nb%2 == 0 ) {
        echo "$nb est pair";
    }else echo "$nb est impair";
}

$x= readline("Saisir un nb ");
echo pair($x);
















