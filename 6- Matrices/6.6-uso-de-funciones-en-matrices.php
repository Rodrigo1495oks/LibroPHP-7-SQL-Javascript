<?php

// uso de funciones en matrices

// 1- is_array()
$fred = array("carl", "fred");

echo (is_array($fred)) ? "is an array" : "is not an array";

// 2- count

echo count($fred);

echo count($fred, 1);

// 3- sort

sort($fred);

sort($fred, SORT_NUMERIC);
sort($fred, SORT_STRING);

rsort($fred, SORT_NUMERIC);
rsort($fred, SORT_STRING);


// 4- shuffle 
shuffle($fred);

// 5- explode 

// ejemplo 6-12 separacion de una cadena enu na matriz por medio de espacios

$temp = explode(" ", "This is a sentence with seven words");
print_r($temp);

// 6-13 separacion de una cadena limitada con *** en una matriz

$temp1 = explode("***", "A***Sentence***with***asterisks");
print_r($temp1);


// 6- extract

extract($_GET);

extract($_GET, EXTR_PREFIX_ALL, "fromget");

// 7- compact 

$fname = "Doctor";
$sname = "Who";
$planet = "Gallyfrey";
$system = "Gridlock";
$constelation = "Kasterborous";

$contact = compact("fname", "sname", "planet", "system", "constelation");

print_r($contact);

// ejemplo 6-15 - compact para depurar

$j = 23;
$temp = "Hello";
$address = "1 Old Streer";
$age = 61;

print_r(compact(explode(" ","j temp address age")));

// 8- reset

//9- end

