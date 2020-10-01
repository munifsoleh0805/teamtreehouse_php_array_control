<?php

/**
 * 28/09/2020
 */

$facts=array(
    57 => "on heinz ketchup bottles",
    2 => "is the approximate",
    18 => "is the average",
    10 => "per can of the world",
    11 => "empire state",
    98 =>"% of the atoms",
    69 => "is the larges number"
);

for($x=1;$x<=100;$x++){
    if(isset($facts[$x])){
        echo $x .$facts[$x];
    }else{
    echo "$x \n";
    }
}
//var_dump(isset($facts));


?>