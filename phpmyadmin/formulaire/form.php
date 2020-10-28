<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous" />
        
        
        <title>Document</title>
    </head>

    <body>
        <?php 

        /* Fonction pour AJOUTER, SUPPRIMER, MODIFIER */


            /* AJOUTER */

            if (isset($_GET["action"])  && $_GET["action"]=="add" && !empty($_POST)){
                if (isset($_POST["email"]) && !empty($_POST["email"]) &&
                    isset($_POST["prenom"]) && !empty($_POST["prenom"]) && 
                    isset($_POST["nom"]) && !empty($_POST["nom"]) && 
                    isset($_POST["age"]) && !empty($_POST["age"]) && 
                    isset($_POST["ville"]) && !empty($_POST["ville"])) {

                    /* on ouvre le fichier test et on ecrit les lignes enregistrées sur le formulaire */
                        $file = fopen("test.txt", "a+") or die("Unable to open file");
                            fwrite($file, $_POST['email'] . ";" . $_POST['prenom'] . ";". $_POST['nom'] . ";" . $_POST['age']. ";" . $_POST['ville']. "\n");                    
                                fclose($file);
                                    /* redirection sans retour possible en arriere */
                                    header('location:./form.php?ajout=ok'); 
                }


            /* SUPPRIMER */

            /* quand unifected action mettre isset */
            }elseif (isset($_GET["action"])  && $_GET["action"]=="delete"){ 
                        /* nom du fichier */
                        $filename="test.txt";  
                        /* la fonction file lit le fichier et met chaque ligne de celui-ci dans un tableau */
                        $file = file($filename);                      
                        /* on nomme une variable pour la mettre dans le unset */
                        $email = $_GET['email']; 
                         //var_dump($file[$email]); 
                        unset($file[$email]);

                                /* réinsère les lignes dans le fichier, ça écrase l'ancien fichier */
                                file_put_contents($filename, $file); 
                                header('location:./form.php?suppression=ok');


            /* MODIFIER */    

            } elseif ((isset($_GET["action"]))  && ($_GET["action"]=="modif")) {
                    if (isset($_POST["modifemail"]) && !empty($_POST["modifemail"]) &&
                        isset($_POST["modifprenom"]) && !empty($_POST["modifprenom"]) && 
                        isset($_POST["modifnom"]) && !empty($_POST["modifnom"]) && 
                        isset($_POST["modifage"]) && !empty($_POST["modifage"]) && 
                        isset($_POST["modifville"]) && !empty($_POST["modifville"])) {

                            $emaildef = $_GET["email"];
                            $email = $_POST["modifemail"];
                            $prenom = $_POST["modifprenom"];
                            $nom = $_POST["modifnom"];
                            $age = $_POST["modifage"];
                            $ville = $_POST["modifville"];
            
                        /* Variable pour == modif */
                            /* L'utilisation de PHP_EOL garantit que le retour à la ligne sera correct */
                            $news_line_char = PHP_EOL;            
                            $new_col_char  = ";";


                            $file=file_get_contents("test.txt");
                            $tabmodif = explode($news_line_char, $file);
                            $new_file2 = "";

                                foreach($tabmodif as $row){
                                    if (!empty($row)){
                                        $col = explode ($new_col_char, $row);
                                            if ($col[0] != $emaildef){
                                                $new_file2 .= $row . $news_line_char;
                                            } else {
                                                $array=array($email, $prenom, $nom, $age, $ville);
                                                $row= implode(';',$array);
                                                $new_file2 .= $row . $news_line_char;
                                            }
                                        }
                                    }
                            file_put_contents("test.txt", $new_file2);
                            header('location:./form.php?modification=ok');
                }
            }
        ?>


   <!--  Alerte des boutons -->
    <div class="container mt-2">
            <?php
                /* Alerte bouton ajouter */
                    if(isset($_GET['ajout']) && $_GET['ajout'] == 'ok'){ 
                        echo '
                            <div class="alert alert-success text-center" role="alert">
                                Ajout avec succes !!!
                            </div>
                        ';
                    }
                /* Alerte bouton supprimer */   
                    if(isset($_GET['suppression']) && $_GET['suppression'] == 'ok'){ 
                        echo '
                            <div class="alert alert-danger text-center" role="alert">
                                Suppression avec succes !!!
                            </div>
                        ';
                    }
                /* Alerte bouton modifier */
                    if(isset($_GET['modification']) && $_GET['modification'] == 'ok'){ 
                        echo '
                            <div class="mt-3 alert alert-info text-center" role="alert">
                                modification avec succes !!!
                            </div>
                        ';
                    }
?> 


<!-- tableau vide  -->
        <table class="table rounded table-striped table-dark">
            <thead>
                <tr>
                    <th><i class="far fa-envelope"></i> E-mail</th>
                    <th>Prenom</th>
                    <th>Nom</th>
                    <th>Age</th>
                    <th>Ville</th>
                    <th>Suppression</th>
                    <th>Modification</th>
                    <th>Consultation</th>
                </tr>                 
            </thead>                   
            <tbody>
                <tr>
                    <?php
                            /* Ajouter la valeur dans le tableau */
                            $file = fopen("test.txt", "r");   
                            /* pour incrementer et retrouver la ligne entiere */
                            $i = 0;            
                                    while(!feof($file)) {   
                                        $tab = explode(";", fgets($file)); 	
                                            if($tab[0] != ""){
                                                echo '<tr>';                             
                                                    foreach ($tab as $value) {	   
                                                        echo  "<td>$value</td>"; 	
                                                    }                 
                    ?>
                            <!-- Bouton Supprimer  -->
                                    <td>   
                                        <a href="form.php?action=delete&email=<?php echo $i?>">
                                            <button class="btn btn-danger"><i class="far fa-trash-alt"></i> Supprimer</button>
                                        </a>
                                    </td>
                            <!-- Bouton Modif -->
                                    <td>
                                        <a href='form_ajout.php?action=modify&email=<?php echo $tab[0];?>&prenom=<?php echo $tab[1];?>&nom=<?php echo $tab[2];?>&age=<?php echo $tab[3];?>&ville=<?php echo $tab[4];?>'>
                                            <button class='btn btn btn-primary'value='modify'><i class="far fa-edit"></i> Modifier</button>
                                        </a>
                                    </td>  
                    
                            <!-- Bouton Consulter -->
                                    <td>
                                        <a href='form_detail.php?action=voir&email=<?php echo $tab[0];?>&prenom=<?php echo $tab[1];?>&nom=<?php echo $tab[2];?>&age=<?php echo $tab[3];?>&ville=<?php echo $tab[4];?>'>
                                            <button class="btn btn-success"><i class="far fa-eye"></i> Consulter</button>
                                        </a>
                                    </td>
                    <?php
                                             
                                                $i++;
                                            }
                                    } 
                                fclose($file); 
                    ?>
                    
                </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-12 text-center mb-2">
            <a href='form_ajout.php?action=add' class='text-white'>
                <button id="addBtn" class=' btn btn btn-success'><i class="fas fa-plus-circle"></i> Ajouter</button>
            </a>
        </div>
    </div>


</body>
</html>