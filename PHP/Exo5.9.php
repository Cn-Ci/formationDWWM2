Exo 5.9
<?php 
$somme = 0;

do {                                                                            /* jusqu'a ce que le prix est 0 on arrete */
    $prix = readline(" Saisir le montant d'un article ");                       
    $somme = $somme + $prix;
    echo "Vous devez payer $prix euros, vous devez $somme euros ";
}while ($prix != 0);
    $argent = readline("Saisir cb vous donnez ");                               
    $rendu = $argent - $somme;
    $b10 = $rendu / 10; 
    $b5 = ($rendu % 10) / 5;                                                    /* les billets de 5 est egale au reste du rendu diviser par 10 le tout diviser par 5  */
    $p1 = ($rendu % 5);
    echo "Voici votre monnaie ". intval($rendu) ."\n il y a ". intval($b10) ." billet de 10 euros, \n 
            il y a ". intval($b5) ." billet de 5 euros, \n il y a " . intval($p1) ." piece de 1 euros ";

    ?>
