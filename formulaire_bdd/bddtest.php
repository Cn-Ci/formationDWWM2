<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>bdd</title>
         <!-- BOOTSTRAP -->
         <link 
            rel="stylesheet" 
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" 
            integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" 
            crossorigin="anonymous">
        <!-- JQUERY -->
        <script
            src         ="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity   ="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin ="anonymous">
        </script>
    </head>
    <body>
     
    <?php 
//variable pour ==modif
$new_line_char = PHP_EOL;            
$new_col_char  = ";";

/* 1e etape => Ajouter dans le tableau du formulaire */
if (isset($_GET["action"])  && $_GET["action"]=="add" && !empty($_POST)){
    if (isset($_POST["noemp"]) && !empty($_POST["noemp"]) &&
        isset($_POST["nom"]) && !empty($_POST["nom"]) &&
        isset($_POST["prenom"]) && !empty($_POST["prenom"]) && 
        isset($_POST["emploi"]) && !empty($_POST["emploi"]) && 
        isset($_POST["embauche"]) && !empty($_POST["embauche"]) && 
        isset($_POST["sal"]) && !empty($_POST["sal"]) &&
        isset($_POST["comm"]) && !empty($_POST["comm"]) &&
        isset($_POST["noserv"]) && !empty($_POST["noserv"]) &&
        isset($_POST["sup"]) && !empty($_POST["sup"]) &&
        isset($_POST["noproj"]) && !empty($_POST["noproj"])) {

        /* on ouvre le fichier test et on ecrit les lignes enregistrées sur le formulaire */
        

        $noemp = $_POST["noemp"];
        $nom = $_POST["nom"];
        $prenom = $_POST["prenom"];
        $emploi = $_POST["emploi"];
        $embauche = $_POST["embauche"];
        $sal = $_POST["sal"];
        $comm = $_POST["comm"];
        $noserv = $_POST["noserv"];
        $sup = $_POST["sup"];
        $noproj = $_POST["noproj"];

                                
                                //On se connecte
                                $db = mysqli_init();
                                mysqli_real_connect($db, 'localhost','root','','afpa_test');
                                $rs = mysqli_query($db, 'SELECT * FROM employe');
                                $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);
        
     
        $sql = "INSERT INTO employe VALUES($noemp , '$nom' , '$prenom' , '$emploi' , $embauche , $sal , $comm , $noserv , $sup , $noproj)";
        if (mysqli_query($db, $sql)) { 
            echo "ok";
        }else {
            echo "erreur";
        }

                header('location:./formm.php?ajout=ok'); /* redirection sans retour possible en arriere */
    }
}
/* 2e etape => Suppression dans le tableau du formulaire */
elseif (isset($_GET["action"])  && $_GET["action"]=="delete"){ // quand unifected action mettre isset
            $filename="test.txt"; // nom du fichier
                $file = file($filename); // la fonction file lit le fichier et met chaque ligne de celui-ci dans un tableau                    
    
                    $email = $_GET['noemp']; // on nomme une variable pour la mettre dans le unset
                        //var_dump($file[$email]);
    
                    unset($file[$noemp]);
    
                file_put_contents($filename, $file); // réinsère les lignes dans le fichier, ça écrase l'ancien fichier.
            header('location:./form.php?suppression=ok');

/* 3e etape => Modification dans le tableau du formulaire */    
} elseif (isset($_GET["action"])  && $_GET["action"]=="modify" &&
            isset($_POST["modifnoemp"]) && !empty($_POST["modifnoemp"]) &&
            isset($_POST["modifnom"]) && !empty($_POST["modifnom"]) && 
            isset($_POST["modifprenom"]) && !empty($_POST["modifprenom"]) && 
            isset($_POST["modifemploi"]) && !empty($_POST["modifemploi"]) && 
            isset($_POST["modifembauche"]) && !empty($_POST["modifembauche"]) &&
            isset($_POST["modifsal"]) && !empty($_POST["modifsal"]) &&
            isset($_POST["modifcomm"]) && !empty($_POST["modifcomm"]) &&
            isset($_POST["modifnoserv"]) && !empty($_POST["modifnoserv"]) &&
            isset($_POST["modifsup"]) && !empty($_POST["modifsup"]) &&
            isset($_POST["modifnoproj"]) && !empty($_POST["modifnoproj"])
            ) {

                $noempdef = $_GET["noemp"];
                $nom = $_POST["modifnom"];
                $prenom = $_POST["modifprenom"];
                $emploi = $_POST["modifemploi"];
                $embauche = $_POST["modifembauche"];
                $sal = $_POST["modifsal"];
                $comm = $_POST["modifcomm"];
                $noserv = $_POST["modifnoserv"];
                $sup = $_POST["modifsup"];
                $noproj = $_POST["modifnoproj"];
 
            $file=file_get_contents("test.txt") or die("test"); // nom du fichier
                $tab = explode($news_line_char, $file);
                    var_dump($tab);
                        $new_file2 = "";

            foreach($tab as $row){
                if (!empty($row)){
                    $col = explode ($new_col_char, $row);

                    if ($col[0] != $emaildef){
                        $new_file2 .= $rows . $new_line_char;
                    }
                    else {
                        $array=array($noemp, $nom, $prenom, $emploi, $embauche, $sal, $comm, $noserv, $sup, $noproj);
                        $row= implode(';',$array);
                        $new_file2 .= $row . $new_line_char;
                    }
                }
            }
            file_put_contents("test.txt", $new_file2);
        

}else{
?>
   <!--  Alerte des boutons -->
<div class="container">
<?php
    if(isset($_GET['ajout']) && $_GET['ajout'] == 'ok'){ // alerte d'ajout
        echo '
            <div class="alert alert-success" role="alert">
                Ajout avec succes !!!
            </div>
        ';
    }
    
    if(isset($_GET['suppression']) && $_GET['suppression'] == 'ok'){ // alerte de suppression
        echo '
            <div class="alert alert-danger" role="alert">
                Suppression avec succes !!!
            </div>
        ';
    }

    if(isset($_GET['modification']) && $_GET['modification'] == 'ok'){ // alerte de modification
        echo '
            <div class="alert alert-danger" role="alert">
                modification avec succes !!!
            </div>
        ';
    }
?>
        <div class="container-fluid">
            <div class="row">
                <div class="col-10 m-5 ">
                    <table class="table table-striped table-secondary">
                        <thead class="text-center">
                                <tr>
                                    <th>noemp</th>
                                    <th>nom</th>
                                    <th>prenom</th>
                                    <th>emploi</th>
                                    <th>embauche</th>
                                    <th>sal</th>
                                    <th>comm</th>
                                    <th>noserv</th>
                                    <th>sup</th>
                                    <th>noproj</th>
                                    <th>Supprimer<th>
                                </tr>
                        </thead>


                        <tbody class="text-center">
                            <tr>

                                <?php
                                $db = mysqli_init();
                                mysqli_real_connect($db, 'localhost','root','','afpa_test');
                                $rs = mysqli_query($db, 'SELECT * FROM employe');
                                $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);

                                    foreach ($data as $key => $value) {
                                        foreach ($value as $v) {
                                            echo "<td>$v</td>";
                                        } 
                                        ?>

                                        <td>   
                                            <a href="formm.php?action=delete&noemp>">
                                                <button class="btn btn-danger">Supprimer</button>
                                            </a>
                                        </td>
                                        <td>
                                            <a href='form_ajout.php?action=modify&noemp='>
                                                <button class='btn btn btn-primary'value='modify'>Modification</button>
                                            </a>
                                        </td>  

                                        <?php
                                        echo  "</tr>";
                                    } 
                                ?>

                        </tbody>
                    </table>

                        <a href='form_ajout.php?action=add'>
                        <button type="submit" class="btn btn-primary"> 
                            Ajouter un nouvel employe
                        </button>

                </div>
                <?php
}
?>
            </div>
        </div>
    </body>
</html>