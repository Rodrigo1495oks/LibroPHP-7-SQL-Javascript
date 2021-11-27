<?php


// ejejmplo 6-6

$paper = array("copier", "laser", "injekt", "photo");

$j = 0;

foreach ($paper as $item) {
    # code...
    echo "$j: $item <br>";
    $j++;
}

// ejemplo 6-7 recorrdido a traves de una matriz asociativa utilizando foreach...as

$paper1 = array(
    "copier" => "Copier & multipurpose",
    "injekt" => "Injekt printer",
    "laser" => "Laser Printer",
    "photo" => "Photografic paper"
);

foreach ($paper1 as $item =>$description) {
    # code...
    echo "$item: $description <br>";
}


// ejemplo 6-8 recorrido  utilizando each y list

$paper2 = array(
    "copier" => "Copier & multipurpose",
    "injekt" => "Injekt printer",
    "laser" => "Laser Printer",
    "photo" => "Photografic paper"
);


while (list($item,$description)=each($paper))
    echo "$item: $description <br>";

// ejemplo 6-9 uso de la funcion list

list($a,$b)=array("Alice","Bob");
echo "a=$a a=$b";

