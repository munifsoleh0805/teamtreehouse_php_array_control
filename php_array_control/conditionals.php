<?php

// $score=60;
// if($score>=60)
// {
//     echo "You past the test";  //jika nilainya 
// }elseif($score>=50 && $score<=60)
// {
//     echo "Try Again";   
// }else
// {
//     echo "You fail the test";
// }



echo PHP_EOL;
function grade($score)
{
    if($score>=95 && $score<=100)
{
    return "A \n"; 
}elseif($score>=75 && $score<=95)
{
    return "B \n";   
}elseif($score>=65 && $score<=75)
{
    return "C \n";   
}else
{
    return "D";
}
}
echo grade(96);
echo grade(95);
echo grade(65);
echo grade(60);



//Compare
//@link https://www.php.net/manual/en/
var_dump((1<>2));    //true
var_dump((1!=2));    //true

//identical
var_dump(1!=="1");  //false



$num=10000;
if($num>=10 && $num<=1000)
{
    echo "Your number is in range"; // jika nilai 10 - 1000
}else
{
    echo "Your number is NOT in range"; //jika kurang dari 10
}
var_dump( ($number=true) || (false && true) );



echo PHP_EOL;

switch(date('1'))
{
    case "Monday";
        echo "Starting Day";
        break;
    case "Tuesday";
        echo "Wash a car";
        break;
    case "Wednesday";
        echo "Holiday";
        break;
    case "Thursday";
        echo "Vacation";
        break;
        default:
        echo "Long holiday";
}


?>