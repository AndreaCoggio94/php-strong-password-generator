<?php 

$pswFinal = randomPswGenerator($length, $pswCharacters) ;
function randomPswGenerator($maxWhile , $pswChoosenCharacters) {
    $psw = "" ;
    $starterWhile= 0;
    while ($starterWhile < $maxWhile) {
      // echo("index : " . rand(0, 100) . " <br>") ;
      $random = rand(0, strlen($pswChoosenCharacters)-1) ;
      // echo($pswCharacters[$random]);
      $psw .= $pswChoosenCharacters[$random] ;
      $starterWhile++ ;
    }
    
    return $psw;
  }
?>