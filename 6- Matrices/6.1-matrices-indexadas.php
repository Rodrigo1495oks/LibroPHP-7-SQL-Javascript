<?php




// ejemplo 6-1 adicion de elementos a una matriz

$paper[] = "copier";
$paper[] = "Injekt";
$paper[] = "Laser";
$paper[] = "Photo";

print_r($paper);

// ejemplo 6-2 uicaciones ecplicitas

$paper[0] = "copier";
$paper[1] = "Injekt";
$paper[2] = "Laser";
$paper[3] = "Photo";

print_r($paper);



// ejemplo 6-3 - adicion  y recuperacion de elementos de una matriz

$paper[] = "copier";
$paper[] = "Injekt";
$paper[] = "Laser";
$paper[] = "Photo";

for ($j = 0; $j < 4; $j++) {
    # code...
    echo "$j: paper[$j] <br>";
}

