<?php        

$arr_str = array ('Linio','IT','Linianos');

for ($j=1;$j<=100;$j++)
{
    if ($j % 5 == 0 or $j % 3 == 0)
    {
        //Mul of 3 & 5                      Mul of 5  :: otherwise Mul of 3
        $inx = (!(($j % 3) ^ ($j % 5))) + (!($j % 5));        
        echo $arr_str[$inx] . "\r\n";
        continue;
    }
    echo $j . "\r\n";
}
