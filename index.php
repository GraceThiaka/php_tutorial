<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php tutorial</title>
</head>
<body>
 
<?php

$first_name = 'Gracey' ;
$age = 16;
//$grade = 70;
$isMarried = true;


//echo "My name is $first_name and my age is $age. I got a mean score of $grade and my status is $Married" ;

//$num1 =10;
//$num2 =20;
//$result = $num1 + $num2;
//echo "the sum is $result". '<br>';


//$multiplication = $num2 * $num1;
//echo "the answer is $multiplication". '<br>';

//$exp = $num2 ** $num1;
//echo "the answer is $exp";

$first_name ='Gracey';
print($first_name). '<br>';
$person=['first_name' =>'Gracey','age' =>16,'D.O.B' =>'2010/04/02'];
var_dump($first_name);
$fruits =["banana","apple"];
$myArray =["banana","apple"];
print_r($myArray);
echo implode('***' ,$myArray).'<br>';
var_dump($isMarried);
$mysecondArray=['first_name' =>'Gracey','age' =>16,'D.O.B' =>'2010/04/02'];
//print_r($mysecondArray['age']);

foreach($fruits as $fruit)
    echo $fruit.'<br>';
foreach($person as $key=>$value){
    echo "$key :$value <br>";
}
if($age>10){
    echo 'you are so old'. '<br>';
}
$grade=60;
if($grade>70){
    echo 'grade=A';
}
else if($grade>50){
    echo 'grade=B'. '<br>';
}
else{
    {echo 'failed test';}
}
// $greeting = "hello mary";
// $greeting = function greeting($name){
//     echo greeting("Mary");
// }
// echo greetUser("Mary");
// greeting ("Mariana");

?>

</body>
</html>