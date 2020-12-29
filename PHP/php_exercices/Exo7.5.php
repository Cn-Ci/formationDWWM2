Exo 7.5
<?php 
$a = 5;
$idepart = 1;
$ifinal = $a;
$trouve = false;;

$dicto [0] = "animaux";
$dicto [1] = "bonjour";
$dicto [2] = "chat";
$dicto [3] = "dindon";
$dicto [4] = "elephant";
$dicto [5] = "faon";

$mot = readline(" Saisir un mot ");

do {
    $imilieux = ($idepart + $ifinal) /2; 
    $im=intval($imilieux);
        if ($mot > $dicto[$im]) {
        $idepart = $im + 1;
        }
            elseif ($mot < $dicto[$im]){
                $ifinal = $im -1;
            }
                elseif ($mot = $dicto[$im]){
                $trouve = true;
                break;
                }

}while ($idepart <= $ifinal);
if ($trouve) {
    echo "mot trouvé";
}
else {
        echo "mot non trouvé";
}

?>
