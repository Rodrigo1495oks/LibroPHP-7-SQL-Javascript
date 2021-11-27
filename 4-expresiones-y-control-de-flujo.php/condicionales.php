<!-- condicionales -->

<?php

// if

// else

// else if


// declaracion switch

// ejemplo 4-22
$page = 'home';

if ($page == 'home') {
    echo 'you selected page home';
} else if ($page == 'about') {
    echo 'you selected aboti page';
} else if ($page == 'news') {
    echo 'you selected newa';
} else if ($page == 'login') {
    # code...
    echo 'you selected login page';
} elseif ($page == 'links') {
    echo 'you selected links';
} else {
    echo 'invalid selection';
}

// ejemplo 4-23

switch ($page) {
    case 'home':
        echo 'you selected home';
        break;
    case 'about':
        echo 'you selected about';
        break;
    case 'news':
        echo 'you selected news';
        break;
    case 'login':
        echo 'you selected login page';
        break;
    case 'links':
        echo 'you selected links';
        break;
    default:
        echo 'invalidad selection';
        break;
}
// operador ternario

//ejeplo 4-26 uso del operador ?

$fuel = 100;

echo $fuel <= 1 ? "Fill tank now" : "There´s enough fuel";

$enough = $fuel <= 1 ? false : true;
echo $enough;
?>