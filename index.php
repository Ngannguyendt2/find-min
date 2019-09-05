<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array=[2,3,5,2,5,2,1,5];

function findMin($arr){
    $min=$arr[0];
    $index=null;
    foreach ($arr as $key => $value){
       if($value<$min){
           $min=$value;
           $index=$key;
       }
    }
    echo "Vi tri min la ".$index."<br>";
    return $min;
}
echo "Min is ".findMin($array);
?>
</body>
</html>
