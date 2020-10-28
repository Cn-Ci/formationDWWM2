<?php
require_once 'conf/configuration.php';

//afficher données
$sql = "SELECT * FROM utilisateurs";
$rs = mysqli_query($db, $sql);
$selectDatas = mysqli_fetch_all($rs, MYSQLI_ASSOC);
?>

<!doctype html>
<html lang="fr">
<head>
    <title>formulaire</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>


<?php

if (isset($_POST['ajouter'])){

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];

    $sql = "INSERT INTO utilisateurs VALUES(
              '',
              '$nom',
              '$prenom',
              ''
            )";
    if (mysqli_query($db, $sql)) {
        header('location: ./index.php?action=ajoutOk');
    }else {
        printf("Message d'erreur : %s\n", $db->error);
    }

}


if (isset($_POST['modifier'])){

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $id = $_POST["id"];

    $sql = "UPDATE utilisateurs SET nom = '$nom' , prenom = '$prenom' WHERE id = $id";
    if (mysqli_query($db, $sql)) {
        header('location: ./index.php?action=modificationOk');
    }else {
        printf("Message d'erreur : %s\n", $db->error);
    }

}


if (isset($_POST['supprimer'])){

    $id = $_POST["id"];

    $sql = "DELETE FROM utilisateurs WHERE id = $id";
    if (mysqli_query($db, $sql)) {
        header('location: ./index.php?action=suppressionOk');
    }else {
        printf("Message d'erreur : %s\n", $db->error);
    }

}


?>



<?php if (isset($_GET['page'])){

    if($_GET['page'] == 'ajouter' || $_GET['page'] == 'modifier'){

        if ($_GET['page'] == 'ajouter'){

            $id = '';
            $nom = '';
            $prenom = '';
            $action = 'ajouter';

        }

        if ($_GET['page'] == 'modifier'){

            $id = $_GET['id'];

            //afficher données
            $sql = "SELECT * FROM utilisateurs WHERE id = $id";
            $rs = mysqli_query($db, $sql);
            $selectData = mysqli_fetch_assoc($rs);

            $nom = $selectData['nom'];
            $prenom = $selectData['prenom'];
            $action = 'modifier';

        }

        echo '
        <div id="formulaire">
            <form method="post" action="">
                <input type="text" placeholder="Nom" name="nom" value="'.$nom.'">
                <input type="text" placeholder="Prénom" name="prenom" value="'.$prenom.'">
                <input type="hidden" name="id" value="'.$id.'">
                <button type="submit" class="btn btn-info" name="'.$action.'">'.$action.'</button>
            </form>
        </div>
        ';
    }
}else{
?>


    <table class="table table-striped">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Nom</th>
            <th scope="col">Prénom</th>
            <th scope="col">Date inscription</th>
        </tr>
        </thead>
        <tbody>

        <?php
        foreach ($selectDatas as $selectData){

            echo '
                <tr>
                    <th scope="row">1</th>
                    <td>'.$selectData['nom'].'</td>
                    <td>'.$selectData['prenom'].'</td>
                    <td>'.$selectData['date_inscription'].'</td>
                    <td><a href="index.php?page=modifier&id='.$selectData['id'].'" class="btn btn-warning">Modifier</button> </td>
                    <td>
                    <form method="post" action="">
                        <input type="hidden" name="id" value="'.$selectData['id'].'"> 
                        <button type="submit" name="supprimer" class="btn btn-danger">Supprimer</button>
                    </form>
                    </td>
                </tr>
            ';

        }
        ?>
        </tbody>
    </table>

    <div class="row">
        <div class="col-12 text-center">
            <a href="index.php?page=ajouter" class="btn btn-success">Ajouter</a>
        </div>
    </div>

<?php } ?>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
