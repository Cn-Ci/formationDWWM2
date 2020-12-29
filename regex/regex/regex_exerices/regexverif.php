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
<form class="tableau text-center m-5" action="regex.php?action=add" method="post">
       
        <input class="col-6 form text-center" type="text" name="ref"  placeholder="Saisir votre ref (ex : F123456789)"> <br/><br/>
       
        <input class="col-6 form text-center" type="text" name="num" placeholder="Saisir votre tel (ex : 0102030405)"> <br/><br/>
     
        <input class="col-6 form text-center" type="text" name="email" placeholder="Saisir votre email (ex : monemail@email.fr)"> <br/><br/>
   
        <input class="col-6 form text-center" type="text" name="secu" placeholder="Saisir votre secu (ex : 1 99 01 59 111 222 33)"> <br/><br/>

        <input class="form text-center btn btn-primary" type="submit" value="Envoyez"> 
    </form>
<?php
}

?>
</body>
</html>