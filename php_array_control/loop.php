<?php

// for($year=date('Y')-100;$year<=date('Y');$year++){
//     echo $year. "<br /> \n";
// }



$currentYear = date('Y');
$year = $currentYear - 100;

// while(++$year <= $currentYear){
//     echo $year. "<br />\n";
//     $year++;
// }

do{
    echo $year. "<br />\n";
}while(++$year <= $currentYear);



// $learn = array("conditional", "arrays","loop");
// $learn[]="build someting awesome!";
// array_push($learn,"function","forms","object");
// array_unshift($learn,"html","css");
// asort($learn);
// sort($learn);

// for($i=0; $i<count($learn); $i++){
//     echo $learn[$i]. "\n";
// }


?> 