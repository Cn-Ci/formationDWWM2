Exo 4.1 
<?php 
$tutu = 2;
$toto = 5;
$tata  = "ok";
if ( ($tutu > $toto + 4) || ($tata == "ok") ) {             /* Si 2 > 5 +4 || ou tata = ok  */
      $tutu = $tutu +1;                                     /* 3 = 2+1 */
    }else{                                                  /* sinon */
        $tutu = $tutu - 1;                                  /* 1 = 2-1 */
    }
    echo $tutu;                                             /* 3 */
?>

<?php 
$tutu = 2;
$toto = 5;
$tata  = "ok";
if ( ($tutu - 4 > $toto) || ($tata != "ok") ) {
      $tutu = $tutu - 1;
    }else{
        $tutu = $tutu + 1;
    }
    echo $tutu;
?>
