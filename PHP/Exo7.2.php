Exo 7.2

tri à bulle : 
<?php 

for ($i=0;$i<=2;$i++){
    $tab[$i] = readline(" Saisir une valeur ");
}
$yapermute = true;
while($yapermute) {
    $yapermute = false;
    for ($i=0;$i<=2-1;$i++){
       if ($tab[$i] < $tab[$i+1]){;
        $temp = $tab[$i];
        $tab[$i] = $tab[$i +1];
        $tab[$i +1] = $temp;
        $yapermute = true;
       }
    }
} 
print_r ($tab);
?>