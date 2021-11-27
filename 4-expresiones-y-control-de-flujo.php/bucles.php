<!-- bucles -->


<?php

// ejemplo 4-28
$fuel = 10;

while ($fuel > 1) {
    // keep driving

    echo 'There´s enough fuel';
}

$count = 0;

while (++$count <= 12) {
    echo "$count times 12 is: " . $count * 12 . "<br>";
    // ++$count;
}

// bucles do while

// ejemplo 4-13
$count = 1;
do {
    echo "$count times 12 is: " . $count * 12 . "<br>";
    ++$count;
} while ($count <= 12);

// bucles for

// ejejmplo 4-33 

for ($count = 1; $count <= 12; $count++) {
    echo "++$count times 12 is " . $count * 12 . "<br>";
}

// SALIDA DEL BUCLE

// EJEMPLO 4.35  ESCRITURA DE un archivo usando un bucl for con captura de errores

$fp = fopen('text.txt', 'wb');


for ($j = 0; $j < 100; $j++) {
    $written = fwrite($fp, "data");
    if ($written == false) {
        break;
    }
    fclose($fp);
}


// declaracion continue
// ejemplo 4-36


$j = 0;

while ($j > -10) {

    $j--;

    if ($j == 0) {
        continue;
    }

    echo (10 / $j) . "<br>";
}

?>