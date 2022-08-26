<?php
function calc_average( array $array ) {   
    $Arraylength = count($array);
    $Sum = 0 ;
    $Average = 0 ;
    for ( $i = 0 ; $i < $Arraylength; $i++){
        $Sum  += $array[$i];
    }
    $Average += $Sum / $i ;
    $Result = round($Average, 1);
    return $Result;
}
?>