<?php

// continue.php
session_start();

if (isset($_SESSION['forename'])) {
    $forename=htmlspecialchars($_SESSION['forename']);
    $surname=htmlspecialchars($_SESSION['surname']);

    destroy_session_and_data();

    echo htmlspecialchars(

        "Welcome Back $forename, <br>
        Your full name is $forename $surname.<br>
        "
    );
}
else{
    echo "Please <a href='authenticate2.php'>Click here</a>to login";
}

function destroy_session_and_data(){
    session_start();

    $_SESSION=array();
    setcookie(session_name(),'',time()-2592000,'/');
    session_destroy();
}


?>