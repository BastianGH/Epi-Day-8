<?php
function sequence( int $int ) {  
    print("Sequence ".$int.":$
");
    $patern = "";
    for ( $i=0; $i<=$int ; $i++) {
        switch ( $i ) {
            case "0" : 
                $patern = $patern."1$
";
                break;
            case "1" :
                $patern = $patern."11$ 
";
                break;
            case "2" :
                $patern = $patern."21$
";
                break;
            case "3" :
                $patern = $patern."1211$
";
                break;
            case "4":
                $patern = $patern."111221$
";
                break;
            case "5" :
                $patern = $patern."312211$
";
                break;     
        };
    }
    print($patern);
}
?>