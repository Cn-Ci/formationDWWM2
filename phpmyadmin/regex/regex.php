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

if (isset($_GET["action"])  && $_GET["action"]=="add" && !empty($_POST)){
    if (isset($_POST["ref"]) && !empty($_POST["ref"]) &&
        isset($_POST["num"]) && !empty($_POST["num"]) && 
        isset($_POST["email"]) && !empty($_POST["email"]) && 
        isset($_POST["secu"]) && !empty($_POST["secu"]) ) {

            $ref = $_POST["ref"];
            $num = $_POST["num"];
            $email = $_POST["email"];
            $secu = $_POST["secu"];

        /* on ouvre le fichier test et on ecrit les lignes enregistrées sur le formulaire */
            $file = fopen("regex.txt", "a+") or die("Unable to open file");
                fwrite($file, $_POST['ref'] . ";" . $_POST['num'] . ";". $_POST['email'] . ";" . $_POST['secu']."\n");                    
                    fclose($file);
                    
    }
}




?>
<div class="contenair-fluid m-5">
    <table class="table rounded table-striped table-dark">
                <thead>
                    <tr>
                        <th>Ref client</th>
                        <th>Telephone</th>
                        <th>Email</th>
                        <th>Secu</th>
                    </tr>                 
                </thead>                   
                <tbody>
                    <tr>
                        <?php
                                /* Ajouter la valeur dans le tableau */
                                $file = fopen("regex.txt", "r");   
                                /* pour incrementer et retrouver la ligne entiere */
                                $i = 0;            
                                        while(!feof($file)) {   
                                            $tab = explode(";", fgets($file)); 	
                                                if($tab[0] != ""){
                                                    echo '<tr>';                             
                                                        foreach ($tab as $value) {	   
                                                            echo  "<td>$value</td>"; 	
                                                        }                 
                                                
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
            <a href='regexverif.php?action=add' class='text-white'>
                <button id="addBtn" class=' btn btn btn-success'><i class="fas fa-plus-circle"></i> Ajouter</button>
            </a>
        </div>
    </div>


<div class="text-center">
<?php 

if (isset($_GET) && !empty($_POST)){
    if (isset($_POST["ref"]) && !empty($_POST["ref"]) &&
        isset($_POST["num"]) && !empty($_POST["num"]) && 
        isset($_POST["email"]) && !empty($_POST["email"]) && 
        isset($_POST["secu"]) && !empty($_POST["secu"]) ) {


$ref = $_POST["ref"];
$num = $_POST["num"];
$email = $_POST["email"];
$secu = $_POST["secu"];

    if (preg_match("#^F[1-9]{9}#i", $ref)) {
    echo "La reference client est correcte " 
    ?><i class="fas fa-check"></i><br> <?php
}else {
    echo "Reessayer"; ?> <br> <?php
}


if (preg_match("#^0[0-9]{9}#", $num)) {
    echo "Le numero de telephone est correcte " 
    ?><i class="fas fa-check"></i><br> <?php
}else {
    echo "Reessayer "; ?> <br> <?php
}


if (preg_match("#@[a-z]{2,}\.[a-z]{2,}#", $email)) {
    echo "L'email est correcte " 
    ?><i class="fas fa-check"></i><br> <?php
}else {
    echo "Reessayer"; ?> <br> <?php
}


if (preg_match("#^[1-3]\s[0-9]{2}\s[0-1][0-9]\s[0-9]{2}\s[0-9]{3}\s[0-9]{3}\s[0-9]{2}$#", $secu)) {
    echo "Le numero de secu est correcte "
    ?><i class="fas fa-check"></i><br> <?php
}else {
    echo "Reessayer"; ?> <br> <?php
}
}
}


?>

</div>
</body>
</html>