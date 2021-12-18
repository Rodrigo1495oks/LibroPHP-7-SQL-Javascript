<?php

$username='admin';
$password='letmein';


if (isset($_SERVER(['PHP_AUTH_USER']))&&isset($_SERVER['PHP_AUTH_PW'])) {
    # code...
    echo "Welcome user: ". htmlspecialchars($_SERVER['PHP_AUTH_USER']) .
        "Password: "     .htmlspecialchars($_SERVER['PHP_AUTH_PW']);

        if ($_SERVER['PHP_AUTH_USER']==="$username" && 
            $_SERVER['PHP_AUTH_PW']==="$password"
        ) {
            # code...
            echo "<br> you are now logged in";
        }

}else{
    header('WWW-Authenticate_ Basic realm="Restricted Area"');
    header('HTTP/1.0 401 Unauthorized');
    die("Please enter your username and password");
}





?>