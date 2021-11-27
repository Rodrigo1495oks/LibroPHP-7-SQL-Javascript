<?php






printf("My name is %s. I´m %d years old, which is %X in hexadecimal", 'Rodrigo', 25, 25);

printf("<span style='color:#%X%X%X'> Hello </span>", 65, 127, 254);


// ajustes de precision

printf("The result is: %.2f", 123.42 / 12);

echo "<pre>"; // enables viewing of the spaces

// pad to 15 spaces
printf("The result is: $15f\n", 123.42 / 12);

// pad to 15 spaces,  fill with zeros

printf("The result is: $015f\n", 123.42 / 12);

// p<d to 15  speaces, 2 decimal places precision

printf("The result is: $15.2f\n", 123.42 / 12);

// relleno de cadenas

// ejemplo 7-2 relleno de cadenas

echo "<pre>";
#
#
#
$h="Rasmus";

printf("[%s]\n", $h); // standar stringoutput
printf("[%12s]\n", $h); // right justify with spaces to width 12
printf("[%-12s]\n", $h); // left justify with spaces to width 12
printf("[%012s]\n", $h); // pad with zeros
printf("[%'#12s]\n\n", $h); // use the custom padding caracter #
$d = "Rasmus Lerdorf";

printf("[12.8s]\n", $d); // Right justify, cutoff of 8
printf("[-12.12s]\n", $d); // left justify, cutoff of 12
printf("[-'@12.10s]\n", $d); // left justify, cutoff of 10, pad with @




// sprintf()


