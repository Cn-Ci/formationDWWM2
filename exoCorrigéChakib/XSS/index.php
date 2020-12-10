<?php

// XSS : CROSS SITE SCRIPT

$mysqli = new mysqli("localhost", "root", "root", "afpa_test");
if(isset($_GET["action"])){
    $var1 = htmlentities($_POST["noserv"]);
    $var2 = htmlspecialchars($_POST["service"]);
    $var3 = htmlentities($_POST["ville"]);
    $stmt = $mysqli->prepare("INSERT INTO service VALUES(?, ?, ?)");
    $stmt->bind_param("iss", $var1, $var2, $var3);
    $stmt->execute();
}


$stmt = $mysqli->prepare("SELECT * from service");
$stmt->execute();
$rs = $stmt->get_result();
$data = $rs->fetch_all(MYSQLI_ASSOC);

?>

<table border=1>
    <tr>
        <th>N° de service</th>
        <th>Nom du service</th>
        <th>Ville du service</th>
    </tr>
    <?php foreach($data as $line){?>
    <tr>
        <td><?php echo $line["noserv"]; ?></td>
        <td><?php echo $line["service"]; ?></td>
        <td><?php echo $line["ville"]; ?></td>
    </tr>
    <?php }?>
</table>