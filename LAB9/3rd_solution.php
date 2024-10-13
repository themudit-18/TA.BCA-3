<?php
function prime($n){
    $flag = 0;

    for($i=2;$i<$n;$i++)
    {
        if($n%$i==0)
        {
            $flag=1;
            break;
        }

    }
    if($flag==0)
    {   
        return 1;
    }
    else
    {
        return 0;
    }
}
$a=15;
$pri1=prime($a);
echo "$pri1";
?>