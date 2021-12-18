<?php


require_once 'login.php';

$connection=new mysqli($hn,$un,$pw,$db);

if ($connection->connect_error) {
    die("Fatal error");
}

if (isset($_SERVER['PHP_AUTH_USER']) && isset($_SERVER['PHP_AUTH_PW'])) {
    # code...
    $un_temp=mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_USER']);
    $pw_temp=mysql_entities_fix_string($connection, $_SERVER['PHP_AUTH_PW']);

    $query="SELECT * FROM users WHERE username='$un_temp'";
    $result=$connection->query($query);

    if (!$result) {
        die("User not found");
    }elseif($result->num_rows){
        $row=$result->fetch_array(MYSQLI_NUM);

        if (password_verify($pw_temp, $row[3])) {
            # code...
            session_start();

            $_SESSION['forename']=$row[0];
            $_SESSION['surname']=$row[1];

            echo htmlspecialchars("$row[0] $row[1] : Hi $row[0], 
                        you are now logged in as '$row[2]'
            ");
        }else{
            die("<p><a href='continue.php'>Click here to continue</a></p>");
        }
    }else{
        die("invalid username/password combination");
    }
}else{
    header("WWW-Authenticate: Basic Realm='Restricted area'");
    header('HTTP/1.0 401 Unautorized');
    die("Please enter your username and password");
}

$connection->close();
function mysql_entities_fix_string($connection,$string){
    return htmlentities(mysql_fix_string($connection,$string));
}

function mysql_fix_string($connection,$string){
    if (get_magic_quotes_gpc()) {
        # code...
        $string=stripslashes($string);

        return $connection->real_scape_string($string);
    }
}


?>