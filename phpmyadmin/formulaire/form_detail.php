[<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container mt-2">


<?php
if (!empty($_GET)) {

    if ($_GET["action"] == "voir"      && isset($_GET['email']) 
                                            && isset($_GET['prenom']) 
                                            && isset($_GET['nom'])
                                            && isset($_GET['age'])
                                            && isset($_GET['ville'])){
        $email   = $_GET['email'];
        $prenom = $_GET['prenom'];
        $nom    = $_GET['nom'];
        $age   = $_GET['age'];
        $ville    = $_GET['ville'];
        $defaultmail = $_GET['email'];
?>
    <table class="table table-striped table-dark w-75 m-auto">

        <thead>
            <tr>
                <th scope="col">Email</th>
                <th scope="col">Prénom</th>
                <th scope="col">Nom</th>
                <th scope="col">Age</th>
                <th scope="col">Ville</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><?php echo $email; ?></td>
                <td><?php echo $prenom; ?></td>
                <td><?php echo $nom; ?></td>
                <td><?php echo $age; ?></td>
                <td><?php echo $ville; ?></td>
            </tr>
        </tbody>
    </table>
</br>
    <div class="row ">
        <div class="col-12 text-center mb-">
            <a href='form.php' class='text-white'>
                <button id="addBtn" class=' btn btn btn-secondary '><i class="fas fa-plus-circle"></i> Retour</button>
            </a>
        </div>
    </div>
<?php
    }
} 
?>
</div>

</body>
</html>]