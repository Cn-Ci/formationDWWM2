<?php
$prix=rand(1,100000);
for ($i=0;$i<=29;$i++){
    $tentative=readline("Entre une tentative ");
    if($prix==$tentative){ 
        echo "bravo !!"; 
        $i=29;
        if($i==28){echo"il ne vous reste plus qu'un seul essaie \n";}
    }
    elseif($prix<$tentative){
        echo "Tente ta chance avec un nombre plus petit \n";
        if($i==28){echo"il ne vous reste plus qu'un seul essaie \n";}
    }
    elseif($prix>$tentative){
        echo "Tente ta chance avec un nombre plus grand \n";
        if($i==28){echo"il ne vous reste plus qu'un seul essaie \n";}
    }
}
?>