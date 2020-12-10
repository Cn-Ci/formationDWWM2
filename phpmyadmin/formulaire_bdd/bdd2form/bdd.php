<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
        <title>bdd</title>
    </head>

<body>
<?php

/* Ajouter */
if (isset($_GET["action"])  && $_GET["action"]=="add" && !empty($_POST)){
    if (isset($_POST["no_emp"]) && !empty($_POST["no_emp"]) &&
        isset($_POST["noserv"]) && !empty($_POST["noserv"]) ) {

            $no_emp = $_POST["no_emp"];
            $nom = $_POST["nom"]? "'".$_POST['nom']. "'" : 'NULL';
            $prenom = $_POST["prenom"]? "'".$_POST['prenom']. "'" : 'NULL';
            $emploi = $_POST["emploi"]? "'".$_POST['emploi']. "'" : 'NULL';
            $embauche = $_POST["embauche"];
            $sal = $_POST["sal"];
            $comm = $_POST["comm"];
            $noserv = $_POST["noserv"];
            $sup = $_POST["sup"];
            $noproj = $_POST["noproj"];
            
            /* connection a la bdd et insertion de valeur entré par utilisateur */
            $db = mysqli_init();
            mysqli_real_connect($db, 'localhost','root','','afpa_test');

            $sql = "INSERT INTO employe VALUES($no_emp , '$nom' , '$prenom' , '$emploi' , $embauche , $sal , $comm , $noserv , $sup , $noproj)";
            if (mysqli_query($db, $sql)) { 
                echo "ok";
            }else {
                echo "erreur";
            }
    }


/* Modifier */
        } elseif (isset($_GET["action"])  && $_GET["action"]=="modif" && isset($_GET["no_emp"]) 
        ) {

            $no_empdef = $_GET["no_emp"];
            $nom = $_POST["modifnom"]? "'".$_POST['modifnom']. "'" : 'NULL';
            $prenom = $_POST["modifprenom"]? "'".$_POST['modifprenom']. "'" : 'NULL';
            $emploi = $_POST["modifemploi"]? "'".$_POST['modifemploi']. "'" : 'NULL';
            $embauche = $_POST["modifembauche"];
            $sal = $_POST["modifsal"];
            $comm = $_POST["modifcomm"];
            $noserv = $_POST["modifnoserv"];
            $sup = $_POST["modifsup"];
            $noproj = $_POST["modifnoproj"];

            $db = mysqli_init();
            mysqli_real_connect($db, 'localhost','root','root','afpa_test');

            $sql = " update employe set nom= $nom, prenom=$prenom , emploi=$emploi, sal=$sal , comm=$comm, sup=$sup where no_emp=$no_empdef";
            
            $requete = mysqli_query($db, $sql);

            //affichage des résultats, pour savoir si la modification a marchée:
            if($requete){
                echo("La modification à été correctement effectuée") ;
            }else{
                echo("La modification à échouée") ;
            } 

            

        /* Supprimer */
        }elseif (isset($_GET["action"]) && $_GET['action']=="delete" && isset($_GET['no_emp'])){ 
            $no_emp = $_GET['no_emp'];

            $db = mysqli_init();
            mysqli_real_connect($db,'localhost','root','root','afpa_test');

            $rs = "delete from employe where no_emp=$no_emp";
            $data=mysqli_query($db, $rs);

        }

?>

<!-- tableau de bdd -->

                        <a href='bdd_ajout.php?action=add'>
                            <button type="submit" class="btn btn-primary"> 
                                Ajouter un nouvel employe
                            </button>
                        </a>

<div class="container-fluid">
            <div class="row">
                <div class="col-10 m-5 ">
                    <table class="table table-striped table-secondary">
                        <thead class="text-center">
                                <tr>
                                    <th>no_emp</th>
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
                                /* connection a la bdd */
                                $db = mysqli_init();
                                mysqli_real_connect($db, 'localhost','root','root','afpa_test');
                                $rs = mysqli_query($db, 'SELECT * FROM employe');
                                $data = mysqli_fetch_all($rs, MYSQLI_ASSOC);

                                foreach ($data as $key => $value) {
                                    foreach ($value as $v) {
                                        echo "<td>$v</td>";
                                    } 
                                    ?>

                                    <!-- bouton supprimer -->
                                    <td>   
                                        <a href="bdd.php?action=delete&amp;no_emp=<?php echo $value['no_emp'];?>">
                                            <button class="btn btn-danger" value='remove'>Supprimer</button>
                                        </a>
                                    </td>

                                    <!-- bouton modifier -->
                                    <td>
                                        <a href="bdd_ajout.php?action=modif&amp;no_emp=<?php echo $value['no_emp'];?>">
                                            <button class='btn btn btn-primary'value='modif'>Modification</button>
                                        </a>
                                    </td> 

                                    <!-- bouton consulter -->
                                    <td>
                                        <a href='bdd_detail.php?action=voir&amp;no_emp=<?php echo $value['no_emp'];?>'>
                                            <button class="btn btn-success"><i class="far fa-eye"></i> Consulter</button>
                                        </a>
                                    </td>

                                    <?php
                                    echo  "</tr>";
                                } 
                                ?>

                        </tbody>
                    </table>

                       
                </div>
            </div>
</div>
            

</body>
</html>