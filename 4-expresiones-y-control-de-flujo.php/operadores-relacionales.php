<?php
// operadores relacionales


// ejemplo 4-12

$month = 'march';

if ($month == "march") {

    echo 'it´s springtime';
}

// ejemplo 4-13 operadores de igualdad e identidad

$a = "1000";
$b = "+1000";

if ($a == $b) {
    echo 1;
}

if ($a === $b) {
    echo 2;
}

// ejemplo 4-14 desigualdad y operador no identico

if ($a != $b) {
    echo 1;
}

if ($a !== $b) {
    echo 2;
}







?>


<?php
// operadores de comparacion

$a = 2;
$b = 3;
if ($a > $b) {
    echo "$a is greater than $b";
}

if ($a < $b) {
    # code...

    echo "$b is greater than $a";
}
if ($a >= $b) {
    # code...

    echo "$a is greater or equal than $b";
}

if ($a <= $b) {
    # code...

    echo "$b is greater or equal than $a";
}


// operadores logicos

$a = 1;
$b = 0;

echo ($a and $b) . "<br>";
echo ($a or $b) . "<br>";
echo ($a xor $b) . "<br>";
echo (!$a) . "<br>";


?>

