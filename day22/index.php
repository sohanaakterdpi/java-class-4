<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
// variable
$color = "IIST";
echo $color ."<br>";

$txt = "text";
echo "this is $txt" . "<br>";

$txt = "Sohana";
echo "my name is $txt" ."<br>";

$txt = "BABA";
echo "$txt is my super hero" ."<br>";

// variable addition 
$x = 10;
$y = 10;
echo $x + $y ."<br>";

$x = 25;
$y = 25;
echo $x + $y ."<br>";

$x = 50;
$y = 50;
echo $x + $y ."<br>";
// array
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

// class
class car {
    public $model = "MERCEDES BENSE";
    public $color = "BLACK";

    public function getCarInformation(){
        return "model : " . $this->model ."color : ". $this->color;
    }
}
$car1 = new car ();

echo $car1->getCarInformation() ."<br>";
// constant
define("dbName","database1");
echo dbName;
?>

</body>
</html>