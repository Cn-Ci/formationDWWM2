<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php 

if ($_GET["action"]=="add"){


?>
<form class="tableau text-center" action="form.php?action=add" method="post">
        <label for="formgr">Email :</label>
        <input required class="form text-center" type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Saisir votre email"> <br/><br/>
        <label for="formgr">Prenom :</label>
        <input class="form text-center" type="text" name="prenom" placeholder="Saisir votre prénom"> <br/><br/>
        <label for="formgr">Nom :</label>
        <input required class="form text-center" type="text" name="nom" placeholder="Saisir votre nom"> <br/><br/>
        <label for="formgr">Age :</label>
        <input class="form text-center" type="number" required name="age" placeholder="Saisir votre age"> <br/><br/>
        <label for="formgr">Ville :</label>
        <input class="form text-center" type="text" name="ville" placeholder="Saisir votre ville"> <br/><br/>
        <input class="form text-center btn btn-primary" type="submit" value="Envoyez"> 
    </form>
<?php
} elseif (!empty($_GET)){
        if(
        isset($_GET["email"]) &&  
        isset($_GET["prenom"]) && 
        isset($_GET["nom"]) && 
        isset($_GET["age"]) && 
        isset($_GET["ville"]) ) {
                $emaildef = $_GET["email"];
                $email = $_GET["email"];
                $prenom = $_GET["prenom"];
                $nom = $_GET["nom"];
                $age = $_GET["age"];
                $ville = $_GET["ville"];

?>
    <form class="tableau text-center" action="form.php?action=modif&email=<?php echo $emaildef?>" method="post"> 
<!-- email -->
    <label for="formgr">Email :</label>
    <input required class="form text-center" type="email" name="modifemail" value="<?php echo $email?>" placeholder="Modifier votre email"> <br/><br/>
<!-- prenom -->
    <label for="fname">Prenom :</>
    <input class="form text-center" type="text" id="fname" name="modifprenom" value="<?php echo $prenom?>" placeholder="Modifier votre prénom"><br/><br/>
<!-- nom -->
    <label for="formgr">Nom :</label>
    <input required class="form text-center" type="text" name="modifnom" value="<?php echo $nom?>" placeholder="Modifier votre nom"> <br/><br/>
<!-- age -->
    <label for="formgr">Age :</label>
    <input class="form text-center" type="number" required name="modifage" value="<?php echo $age?>" placeholder="Modifier votre age"> <br/><br/>
<!-- ville -->
    <label for="formgr">Ville :</label>
    <input class="form text-center" type="text" name="modifville" value="<?php echo $ville?>" placeholder="Modifier votre ville"> <br/><br/>

    <input type="submit" class="btn btn-primary" value="Modifier"/>
</form>
<?php

}
}
?>

    </body>
</html>