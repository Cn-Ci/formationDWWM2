<?php

mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

// Couche présentation
function presentationAfficherFormAjout($errorCode=null, $message){
    if($errorCode && $errorCode == 1062){
        echo "<div class='alert alert-danger'> Employé existant ! !</div>";
    }
    // afficherFormeAjout..

}

// couche controller
function controllerInsert(){
    try {
        serviceInsert();
    }catch(ServiceException $se){
        presentationAfficherFormAjout($se->getCode(), $se->getMessage());
    }
}


// Couche service
function serviceInsert(){

    try {
        daoInsert();
    } catch (DaoException $de){
        throw new ServiceException($de->getMessage(), $de->getCode());
    }
    
}


// Couche DAO
function daoInsert(){
    try {
        $db = new mysqli('localhost', 'rot', '', 'afpa_test');
        $stmt = $db->prepare("INSERT ........ ???????");
        $stmt->bind_param("isisisi", $va1, $var2);
    } catch (mysqli_sql_exception $e) {
        throw new DaoException($e->getMessage(), $e->getCode());
    }
}
















// Tips pour le travail à faire :
// mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
// nom_exception mysqli: mysqli_sql_exception 

// require_once("DivisionByZeroException.php");
// require_once("NegativeNumberException.php");
// require_once("TotoException.php");

// require("fonctions.php");



// $a =  readline("Entrez un nombre :");
// $b =  readline("Entrez un nombre différent de 0 :");

// try {
//     division($a, $b);
    
// }catch(NegativeNumberException $nne){
//     echo "Saisissez un nombre positif";
// }catch(DivisionByZeroException $dze){
//     echo "Saisissez un nombre DIFFERENT DE ZERO";
// }catch(TotoException $te){
//     echo "Un problème est survenu.";
// }catch(Exception $e){
//         echo "Problème technique, réessayez ultérieurement.";
// } finally {
//     echo "\n Voulez-vous réessayer ?";
// }




