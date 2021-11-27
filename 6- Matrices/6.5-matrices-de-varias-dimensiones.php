<?php



// ejemplo 6-10 - matriz multidimensional


$products = array(
    "paper" => array(
        "copier" => "Copier & multipurpose",
        "injekt" => "Injekt printer",
        "laser" => "Laser Printer",
        "photo" => "Photografic paper"
    ),
    "pens" => array(
        "ball" => "Ball Point",
        "hilite" => "High",
        "marker" => "Markers",
    ),
    "misc" => array(
        "tape" => "sticky",
        "glue" => "Adhesives",
        "clips" => "PaperClips",
    ),


);

echo "<pre>";

foreach ($products as $section => $items) {
    foreach ($items as $key => $value) {
        echo "$section: \t$key\t($value)<br>";
    }
}

echo "</pre>";

// ejemplo 6-11 - tablero de ajedrez

$chessBoard=array(
    array("r","n","b","q","k","b","n","r"),
    array("p","p","p","p","p","p","p","p"),
    array(" "," "," "," "," "," "," "," "),
    array(" "," "," "," "," "," "," "," "),
    array(" "," "," "," "," "," "," "," "),
    array(" "," "," "," "," "," "," "," "),
    array("p","p","p","p","p","p","p","p"),
    array("r","n","b","q","k","b","n","r"),
);

echo "<pre>";

foreach ($chessBoard as $row) {
    foreach ($row as $piece) {
        echo "$piece ";
    }
    echo "<br>";
}

echo "</pre>";


