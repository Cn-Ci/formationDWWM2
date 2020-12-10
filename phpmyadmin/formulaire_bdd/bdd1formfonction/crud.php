<?php 
function add($a, $b, $c, $d, $e, $f, $g, $h, $i, $j) {
    $db = mysqli_init();
    mysqli_real_connect($db,'localhost','root','root','afpa_test');

    $sql = "insert into employe values($a, $b, $c, $d, $e, $f, $g, $h, $i, $j)";

    $tab= mysqli_query($db, $sql);
    return $tab; 
}

function modifier($a, $b, $c, $d, $e, $f, $g) {
    $db = mysqli_init();
    mysqli_real_connect($db, 'localhost','root','root','afpa_test');

    $sql = "update employe set nom= $a, prenom=$b , emploi=$c, sal=$d , comm=$e, sup=$f where no_emp = $g";

    $tab= mysqli_query($db, $sql);
    return $tab; 

}
        
function supprimer($a) {
    $db = mysqli_init();
    mysqli_real_connect($db, 'localhost','root','root','afpa_test');    

    $sql = "delete from employe where no_emp= $a";

    $tab= mysqli_query($db, $sql);
    return $tab;
}

function research() {
    $db = mysqli_init();
    mysqli_real_connect($db, 'localhost','root','root','afpa_test');    

    $sql = mysqli_query($db, "select * from employe");
    $selectData = mysqli_fetch_all ($sql, MYSQLI_ASSOC);
    return $selectData;
}

function consult($a) {
    $db = mysqli_init();
    mysqli_real_connect($db, 'localhost','root','root','afpa_test');    

    $sql = mysqli_query($db, "select * from employe where no_emp=$a");
    $selectData = mysqli_fetch_all ($sql, MYSQLI_ASSOC);

}



?>