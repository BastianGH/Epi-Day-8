<?php
function get_shortest( array $array )
{   $Arraylength = count($array);
    print($Arraylength);
    for ( $i=0; $i <= $Arraylength; $i++){
        $Stringlength = strlen($array[$i]);
        $Stringresult;
        print($Stringlength);
        print($array[$i]);
        if ( $i>=1 )  {
            if ( $Stringlength<strlen($array[$i-1]) ) {
            $Stringresult = $array[$i];
            }else print($Stringresult);
        }else $Stringresult = $array[$i];
        print($i);
        print($Stringresult);
        print("/");
    }
    
}
?>