<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$colors = array("red", "green", "blue", "yellow");

foreach ($colors as $value) {
  echo "$value <br>";
}
$student = array("sohana", "sharmin", "sultana", "ruma", "amena", "armin");
// echo $student[0];
foreach($student as $name){
    echo $name;
    echo "<br>";
}
$student = array("sohana" => 35, "ruma" => 53, "sharmin" => 29);
// echo $student[4];
foreach($student as $name => $tk){
    echo $name ." : ". $tk;
    echo "<br>";
}

function sum($x, $y) {
    return $x + $y;
  }
  $v = sum(4,5);
  echo $v. "<br>";

  $v2 = sum(10, 20);
  echo $v2 . "<br>";

// simple
  function simple($x, $y) {
     $z= $x*$x+3*$x+9*$y+6*($y*$y)+32*$x+7*($y*$y*$y);
     return $z;
  }
  $z = simple(2,3);
  echo $z . "<br>";
  
  // simple
  function simple1($x, $y) {
    $z= $x*$x+3*$x+9*$y+6*($y*$y)+32*$x+7*($y*$y*$y);
    return $z;
 }
 echo simple1(2, 3);
 $val = simple1(3, 6);
 echo  "<br>" . $val. "<br>";

//  index array
$cars = array("volvo", "bmw", "toyota");
$arryLenght = count($cars);
for($x = 0; $x < $arryLenght; $x++){
    echo $cars[$x];
    echo  "<br>";
}

// indexed array
$cars = array ("volvo", "bmw", "toyota")
$cars[index]

?>
    
</body>
</html>