<?php

$data=["Rendi", "Munif", "Huda"];
$musisi=implode("\n",$data); //array ->string
echo $musisi;

$musisi_arr=explode("\n",$musisi); //string ->array
print_r($musisi_arr);


//Adding Element
array_push($data, "Matsna"); //Menambah value dibelakang

array_unshift($data, "Cihung"); //menambah value didepan

print_r($data);

//Remove Element
array_pop($data);   //Remove element from end

array_shift($data); //Remove element from beginning

unset($data[0]);    //Remove element array index [0]

print_r(array_values($data));  //Return all array



// array_splice($data);
// array_combine($data);
// array_merge($data);

echo PHP_EOL;
$color=array("Red", "Green", "Blue");

//Add modification below in line

array_unshift($color,"Yellow");//Add Yellow te beginning array

array_pop($color,"Black");     //Add black to the end array

array_splice($color,1,2,"Magenta"); //Replace Red to Magenta

unset($color[2]);  //Remove element form green

print_r($color);


echo PHP_EOL;

$input=array("red","green","blue","yellow");
array_splice($input,1,2,["orange","black"]);
var_dump($input);


echo PHP_EOL;

$iceCream=[
    "Rendi"=>"Black Charry",
    "Munif"=>"Chocolate",
    "Huda"=>"Cookies and Cream",
    "Matsna"=>"Strowberry",
    "likes"=>true,
];
//print_r($iceCream);
ksort($iceCream); //
asort($iceCream);
var_dump($iceCream);

echo PHP_EOL;


$learn = array("conditional", "arrays","loop");
$learn[]="build someting awesome!";
array_push($learn,"function","forms","object");
array_unshift($learn,"html","css");
echo "you removed".array_shift($learn);
echo "you removed".array_pop($learn);
unset($learn[1],$learn[2]);
$learn=array_values($learn);
asort($learn);


?>