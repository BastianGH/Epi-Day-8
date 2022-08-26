<?php
function calc(string $operator , int $nbr1 , int $nbr2 )
{   
    switch($operator) {
        case '+':
            $result = $nbr1 + $nbr2 ;
            print($nbr1." + ".$nbr2." = ".$result);
            break;
        case '-':
            $result = $nbr1 - $nbr2 ;
            print($nbr1." - ".$nbr2." = ".$result);
            break;
        case '*':
            $result = $nbr1 * $nbr2 ;
            print($nbr1." * ".$nbr2." = ".$result);
            break;
        case '/':
            if ($nbr2==0) {
                print("Cannot divide by 0");
            }else $result = $nbr1 / $nbr2 ;
            print($nbr1." / ".$nbr2." = ".$result);
            break;
        case '%':
            $result = $nbr1 % $nbr2 ;
            print($nbr1." % ".$nbr2." = ".$result);
            break;
        default:
            print("Unknown operator");
    }
}
?>