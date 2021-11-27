<?php

require_once 'login.php';
$conn=new mysqli($hn,$un,$pw,$db);
if ($conn->connect_error) {
    die("Fatal Error");
    mysqlFatalError();
}

function mysqlFatalError(){
    echo <<< _END
    We are sorry, but it was not possible to complete
    the requested task. The error message we got was:

    <p>Fatal Error</p>

    Please click the back button on your browser
    and try again. If you are still having problems,
    please <a href"mailto:admin@server.com> Email our 
    administrator</a>. Thanks you.
    _END;
}



